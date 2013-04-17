## "Timeleft" for Panic's Status Board

As the Calendar widget in Ticker mode display only events from Calendar, this one allow you to choose the date and message you want to display, without any Calendar.

The Widget type is **DIY**, so it returns HTML.

### Install
Copy the `timeleft_widget` folder on your own server ( _it requires PHP to work_ ).  
Paste the url in the **DIY** configuration, like : `http://yourdomain.com/path/to/timeleft_widget/`

### Parameters
Currently, the keyboard in Status Board is set in "URL mode". So you can't type any space in the url. If you need to, type `%20` for each space.

###### List :

* **`date`** : A date in english ( _ie, 2013-06-02 or 2013-06-02%2018:30_ )
* **`message`** : Text to display just after the time left
* `lang` : The lang to display time left. Default is `en`.
	* Currently available : `en` | `fr`
* `autorefresh` : the widget refresh itself each 59 seconds. You can pass an other value to this parameter, or `false` if you want to disable autorefresh.

[ _**bold** parameter means it is mandatory_ ]

### Screenshot
![Screenshot](https://dl.dropboxusercontent.com/u/2185088/timeleft_statusboard.png)

### License
**Script:** Copyright 2013 Christophe VERGNE  


