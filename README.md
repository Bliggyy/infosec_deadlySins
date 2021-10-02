Deadly Sins Addressed:

Using hidden inputs or magic inputs when authenticating:

    - Using the laravel framework and their startup authentication kit, it creates for me the basic structure 
    that I would need for creating accounts, logging in,
    forget password, email verification (tho I did not set this up), etc.
    - laravel provides a simple way of authenticating users using their middleware
    - to authenticate a user one can simply use laravel's authenticate method and then create the session token for 
    the user using the session()->regenerate();
    
![1](https://user-images.githubusercontent.com/73883691/135708414-369b7b7d-1263-475b-9787-2743ca104572.png)

    - In this photo above the user is validated and given an auth token using the authenticate() function and wherein the 
    $request variable stores all the user's login credentials and is also verified using the LoginRequest class
    - This makes sure that the auth token cannot just be simply found anywhere on the website and is secure
    - webpages can also be easily protected using the middleware('auth') method which means that only authenticated 
    users may enter that certain webpage
    
![2](https://user-images.githubusercontent.com/73883691/135709074-25b4de1e-9aeb-4c62-803f-08e90ec03cdc.png)

![3](https://user-images.githubusercontent.com/73883691/135709094-386449ff-433b-46d5-beab-09ec75e994c1.png)

    - In these two pictures the login and register pages are open to everyone hence the middleware('guest') function
    is used
    - however in the dashboard page, only authenticated users are allowed access to it hence the middleware('auth')
    function

Hard coding queries:

    - Laravel supports query builders where you no longer have explicitly define what query you want to do and just 
    instead pass a function such as create(), save(), delete(), etc.
    
![4](https://user-images.githubusercontent.com/73883691/135709356-e9e9d3ea-fe91-4179-9c4b-163fdb4fa700.png)

    - This is a register controller and as we can see above, the queries are not explicitly stated
    - The inputs of the user is also being validated using the Validator class and the user is created using
    the create function which uses the User model to store the values
    - The password is also encrypted so that it doesn't show as plain text in the database

![5](https://user-images.githubusercontent.com/73883691/135709357-22b04078-a5cc-49f8-80b9-b3fe206a6668.png)

    - This is how a model looks like, this can be modified so that only specific fields are fillable if stated
    and is able to hide other fields if needed 
    
Validate input passed by users:

    - Based on the pictures shown above both the data that the user enters (when logging in or when registering)
    are being verified to see if the inputs are correct and fit the requirements
    
Notes:

    - should have composer installed if you want to run the website
    - use commands 'npm install' and 'npm run watch' to install the modules 
    - run 'php artisan migrate' to add the migrations 
        - should have a database named 'sin_demonstration'
    - 'php artisan serve' to run the local server




