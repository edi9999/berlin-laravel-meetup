This repo was used for the [January Laravel Meetup](http://www.meetup.com/Laravel-Brussels/events/148656682/)
It aims to show what is possible with the Laravel Framework, combined with the AngularJS Framework.

# The App

The app we're going to build is a shopping list app.

## Basic functionality (will be implemented at the beginning, during the 20 first minutes)

- Adding an item
- Viewing items
- Checking/Unchecking item
- Deleting item
- Grouping items by checked/unchecked

## Advanced features (you choose which one you'd like to see)

- Grouping items by type: vegetables, meat, fish, ...   --- *uses relationships*
- Creating multiple lists                               --- *uses nested resources URL: lists/5/items*

## More advanced features

- Laravel API security                                  --- *uses filters*
- Rate limiting                                         --- *uses filters*


# What I did step by step



- running composer [done]
- importing vendor files in public/js/vendor [done]
- importing jeffrey ways generator tool: https://github.com/JeffreyWay/Laravel-4-Generators [done]
- run command: php artisan generate:scaffold item --fields="name:string,number:int,checked:boolean" [done]
- run migration and seeding [done]




