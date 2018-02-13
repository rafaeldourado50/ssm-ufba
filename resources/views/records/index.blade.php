@extends('layouts.app')

@section('content')
  <div class="row">
    <script type="text/javascript">
        $(function () {
            $('.list-group.checked-list-box .list-group-item').each(function () {

                // Settings
                var $widget = $(this),
                    $checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = ($widget.data('color') ? $widget.data('color') : "primary"),
                    style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: 'glyphicon glyphicon-check'
                        },
                        off: {
                            icon: 'glyphicon glyphicon-unchecked'
                        }
                    };

                $widget.css('cursor', 'pointer')
                $widget.append($checkbox);

                // Event Handlers
                $widget.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });


                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');

                    // Set the button's state
                    $widget.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$widget.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $widget.addClass(style + color + ' active');
                    } else {
                        $widget.removeClass(style + color + ' active');
                    }
                }

                // Initialization
                function init() {

                    if ($widget.data('checked') == true) {
                        $checkbox.prop('checked', !$checkbox.is(':checked'));
                    }

                    updateDisplay();

                    // Inject the icon if applicable
                    if ($widget.find('.state-icon').length == 0) {
                        $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                    }
                }
                init();
            });

            $('#get-checked-data').on('click', function(event) {
                event.preventDefault();
                var checkedItems = {}, counter = 0;
                $("#check-list-box li.active").each(function(idx, li) {
                    checkedItems[counter] = $(li).text();
                    counter++;
                });
                $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
            });
        });
    </script>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Disciplinas cursadas</div>
        <div class="panel-body">

          @include('admin.info')

          {{--<form method="GET" action="{{ url('/permissions') }}" accept-charset="UTF-8" style="display:inline" role="search">--}}
            {{--<input type="text" class="form-control" name="name" placeholder="Search by name..." value="{{ request('name') }}">--}}

            {{--<button type="submit" class="btn btn-success" style="margin-top: 6px;">--}}
              {{--<i class="fa fa-search" aria-hidden="true"></i> Search--}}
            {{--</button>--}}

            {{--<a href="{{ url('/permissions/create') }}" class="btn btn-success" style="margin-top: 6px;">--}}
              {{--<i class="fa fa-plus" aria-hidden="true"></i> New--}}
            {{--</a>--}}
          {{--</form>--}}
          <div class="col-xs-12">
            {{--<h3 class="text-center">Basic Example</h3>--}}
            <div class="panel panel-default">
              @foreach($disciplines as $index => $discipline)
              <a class="list-group-item" data-toggle="collapse" href="#{{$index}}">
                <span class="badge">{{$discipline->count()}}</span>
                {{$index}}
              </a>
              <div class="panel-collapse collapse" id="{{$index}}">
                <div class="panel-body">
                  <ul class="list-group checked-list-box">
                    @foreach($discipline as $item)
                      <li class="list-group-item">  {{$item['name']}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
                @endforeach
            </div>
            <div class="well" style="overflow: auto;">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
