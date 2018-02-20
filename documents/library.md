---
layout: page
title: "Biblioteca utilizada"
---

## Guia de bibliotecas utilizadas para geração de código

### Gerador de migrations

Source: <https://github.com/Xethron/migrations-generator>

To install:

```bash
composer require "xethron/migrations-generator" --dev
```

Command for migrations:

```bash
php artisan migrate:generate
```

### Gerador de seeds

Source: <https://github.com/orangehill/iseed>

To install:

```bash
composer require "orangehill/iseed:2.2" --dev
```

Command for seeds:

```bash
php artisan iseed areas,courses,course_class_offers,course_disciplines,disciplines,discipline_classes,discipline_class_offers,pre_requisites,professors,professor_schedules,schedules
php artisan iseed users,roles,permissions,user_roles,user_permissions,role_permissions
```

### Gerador de models

Source: <https://github.com/krlove/eloquent-model-generator>

To install:

```bash
composer require "krlove/eloquent-model-generator" --dev
```

Commands for model:

```bash
php artisan krlove:generate:model AchievedDiscipline
php artisan krlove:generate:model Area
php artisan krlove:generate:model CourseClassOffer
php artisan krlove:generate:model CourseDiscipline
php artisan krlove:generate:model Course
php artisan krlove:generate:model DisciplineClassOffer
php artisan krlove:generate:model DisciplineClass
php artisan krlove:generate:model Discipline
php artisan krlove:generate:model PreRequisite
php artisan krlove:generate:model ProfessorSchedule
php artisan krlove:generate:model Professor
php artisan krlove:generate:model Schedule
php artisan krlove:generate:model Student
```

### Gerador de controllers e views

Source: <https://github.com/appzcoder/crud-generator>

To install:

```bash
composer require "appzcoder/crud-generator" --dev
```

Commands for controller:

```bash
php artisan crud:controller AchievedDisciplinesController --crud-name=achieved_disciplines --model-name=AchievedDiscipline
php artisan crud:controller AreasController --crud-name=areas --model-name=Area
php artisan crud:controller CourseClassOffersController --crud-name=course_class_offers --model-name=CourseClassOffer
php artisan crud:controller CourseDisciplinesController --crud-name=course_disciplines --model-name=CourseDiscipline
php artisan crud:controller CoursesController --crud-name=courses --model-name=Course
php artisan crud:controller DisciplineClassOffersController --crud-name=discipline_class_offers --model-name=DisciplineClassOffer
php artisan crud:controller DisciplineClassesController --crud-name=discipline_classes --model-name=DisciplineClass
php artisan crud:controller DisciplinesController --crud-name=disciplines --model-name=Discipline
php artisan crud:controller PreRequisitesController --crud-name=pre_requisites --model-name=PreRequisite
php artisan crud:controller ProfessorSchedulesController --crud-name=professor_schedules --model-name=ProfessorSchedule
php artisan crud:controller ProfessorsController --crud-name=professors --model-name=Professor
php artisan crud:controller SchedulesController --crud-name=schedules --model-name=Schedule
php artisan crud:controller StudentsController --crud-name=students --model-name=Student
```

Commands for view:

```bash
php artisan crud:view areas --fields="name#string; description#text"
php artisan crud:view courses --fields="name#string; code#string; curriculum#string"		
php artisan crud:view couse_disciplines --fields="semester#integer; nature#string"
php artisan crud:view disciplines --fields="code#string; name#string; curriculum#string; load#integer"
php artisan crud:view discipline_classes --fields="class_number#string"		
php artisan crud:view discipline_class_offers --fields="vacancies#integer"
php artisan crud:view professors --fields="name#string"
php artisan crud:view schedules --fields="day#integer; first_class_number#integer; class_count#integer"
php artisan crud:view students --fields="name#string; enrollment#integer; email#string"
```