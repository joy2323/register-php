# In the server.php  file, The comments in the code pretty much explain everything, but I'll highlight a few things here...

################################################
################################################

# FOR USER'S REGISTRATION.....................
# The if statement determines if the reg_user button on the registration form is clicked. Remember, in our form, the submit button has a name attribute set to reg_user and that is what we are referencing in the if statement.


# All the data is received from the form and checked to make sure that the user correctly filled the form. Passwords are also compared to make sure they match.

# If no errors were encountered, the user is registered in the users table in the database with a hashed password. The hashed password is for security reasons. It ensures that even if a hacker manages to gain access to your database, they would not be able to read your password.

# When a user is registered in the database, they are immediately logged in and redirected to the index.php page.



# FOR USER LOGIN.................................


# All those codes does is check if the user has filled the form correctly, verifies that their credentials match a record from the database and logs them in if it does. After logging in, the user is redirected them to the index.php file with a success message.



#





#