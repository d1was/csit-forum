## Laravel Lifecycle
1.Request
2. Services
3. Router /user
4. Response

## Authentication

tailwind preset
`composer require laravel-frontend-presets/tailwindcss --dev`

default preset
`composer require laravel/ui`

[laravel auth documentation](https://laravel.com/docs/6.x/authentication#the-user-provider-contract)

[Tailwind preset link](https://github.com/laravel-frontend-presets/tailwindcss)

### git commands
1. To initialize `git init`
2. To add `git add .`
3. Tom commit `git commit -m "<message>"`

## To install from package.json
    `npm install`
    To compile from resource to dev : `npm run dev`

## To migrate database
`php artiasn migrate`
To rollback `php artisan rollback`
To make migration: `php artisan make:migration create_threads_table`

## Generate Factory
`php artisan make:factory ThreadFactory` --model=Thread

## Generate Model
`php artisan make:model Thread `

## Generate Seeder
`php artisan make:seeder UsersTableSeeder`

## Seed db
`php artisan db:seed`

## make controller
`php artisan make:controller AppController`
## Cache options
1. `php artisan cache:clear`
2. `php artisan config:cache`

# Database Schema
`1. User == name,password,email,avatar,
 2. Thread == title,description,
 3. Reply == message,user_id, 
 4. Category == name,


