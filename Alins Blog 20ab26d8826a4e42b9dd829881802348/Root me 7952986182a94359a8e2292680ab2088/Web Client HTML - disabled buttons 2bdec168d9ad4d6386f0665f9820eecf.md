# Web Client : HTML - disabled buttons

Created: May 23, 2021 2:10 AM
Tags: root me, web client, write up

# hello every one

so this is the second write up for another of the easiest challenge of root me wich i solved few years ago

you can click [this](https://www.root-me.org/en/Challenges/Web-Client/HTML-disabled-buttons) to see the challenge

to solve this you should inspect the web page elements and edit them to enable the button

> any client side protection can be baypass

to change the source code you must :

1. click on F12 and going to inspect tab
2. go and remove disable parts:

```html
<form action="" method="post" name="authform">
    <div>
        <input disabled type="text" name="auth-login" value="" />
        <input disabled type="submit" value="Member access" name="authbutton" />
    </div>
</form>
```

dont reload the web page to see the change result the web page butten state will be refresh immediately after remove

then you can see flag by press the button