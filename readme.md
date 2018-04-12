# Introduction
This package contains few composers package by default. After install this project, developer need to follow [Laravel Coding Rules](http://wiki.portalbeanzvn.com/technical/laravel-coding-rules) for more detail.

# Installation
1. Scaffold project
- `composer create-project laraviet/l56_starter_kit [project_name]`
- Note: replace [project name] with your real project.
2. Create new database
3. Edit .env to match with your new database
4. Run migrate and db seed
- `php artisan migrate`
- `php artisan db:seed`
5. (Optional) If you want to use sentry to remote debug
- Register and create new project in https://sentry.io/welcome/
- Edit .env, uncomment `# SENTRY_DSN=` and paste Sentry DSN

# What you get by default
All code almost inside `core` folder with 
- BaseService / BaseServiceContract
- BaseRepository / BaseRepositoryContract
- BookCRUD demo with separation of concern (using service and repository)
- Sample binding in CoreServiceProvider

# Road
- Apply theme