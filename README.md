# md5-hashing
Coursera PHP Assignment week 7
Assignment: Reversing an MD5 hash (password cracking)
In this assignment we build code to reverse an MD5 hash using a brute force technique where we simply 'forward hash' all possible combinations of characters in strings. This would be similar to a situation where an e-commerce site stored hashed passwords in its database and we somehow have gotten our hands on the database contents and we want to take the hashed password and determine the actual plaintext passwords.

This following is a list of people, and their hashed PIN values.
email                pin   hash_pin
-----                ---   --------
csev@umich.edu       ????  0bd65e799153554726820ca639514029
nabgilby@umich.edu   ????  aa36c88c27650af3b9868b723ae15dfc
pconway@umich.edu    ????  1ca906c1ad59db8f11643829560bab55
font@umich.edu       ????  1d8d70dddf147d2d92a634817f01b239
collemc@umich.edu    ????  acf06cdd9c744f969958e1f085554c8b
...
You should be able to easily crack all but one of these these PINs using your application.
The simplest brute force approach generally is done by writing a series of nested loops that go through all possible combinations of characters. This is one of the reasons that password policies specify that you include uppper case, lower case, numbers, and punctuation in passwords is to make brute force cracking more difficult. Significantly increasing the length of the password to something like 20-30 characters is a very good to make brute force cracking more difficult.

Sample solution
You can explore a sample solution for this problem at

http://www.wa4e.com/solutions/crack/
Resources
There are several sources of information so you can do the assignment:

Chapters 14, 23-28, 31 and 32 from the free textbook The Missing Link: An Introduction to Web Development and Programming written by Michael Menendez and published by Open SUNY Textbooks.
Lectures and materials on Expressions, Control Flow, Arrays, Functions, and Forms www.wa4e.com
Partially working sample code. You can play with this application at http://www.wa4e.com/code/crack/ and download a ZIP of the code at http://www.wa4e.com/code/crack.zip.
Specifications
Image of the crack application with a successful crack
Your application will take an MD5 value like "81dc9bdb52d04dc20036dbd8313ed055" (the MD5 for the string "1234") and check all combinations of four-digit "PIN" numbers to see if any of those PINs produce the given hash.

You will present the user with a form where they can enter an MD5 string and request that you reverse-hash the string. If you can reverse hash the string, print out the PIN:

    PIN: 1234
If the string does not reverse hash to a four digit number simply put out a message like:
    PIN: Not found
You must check all four-digit combinations. You must hash the value as a string not as an integer. For example, this shows the right and wrong way to check the hash for "1234":

    $check = hash('md5', '1234');  // Correct - hashing a string
    $check = hash('md5', 1234);    // Incorrect - hashing an integer
You should also print out the first 15 attempts to reverse-hash including both the MD5 value and PIN that you were testing. You should also print out the elapsed time for your computation as shown in the sample application.

Consistency Details
In order to make the assignments more consistent, please follow these technical guidelines:

Put all of your code to do the cracking in your "index.php" so you can hand in one file. You can have other files (like in the sample solution) that you do not have to hand in.
Name the form field where you pass the MD5 into your application "md5"
    <input type="text" name="md5" size="40">
Use the GET method on your form (i.e. not POST)
