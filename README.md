
The main idea of the nethood toolkit is to provide easy to install and customize web applications that are suitable for use in local situations, hosted on offline networks like the piratebox.cc, superglue.it, ocupyhere.org, etc.

There are many guides online on how to create your own offline network using a Raspberry Pi such as http://subnod.es/ and we are working on building one for the nethood toolkit as well (including the option to have an additional Internet connection). And you can find some nice ideas on physical artefacts that could accompany your offline network here: http://nethood.org/links.php (and more soon).

For now, there are two very simple applications available. If you find them useful, you just need to copy the corresponding to your web server directory (/var/www). No databases or any other library is used (except from jquery that is included in the corresponding folder when used). 

Current list of offline apps (partially) implemented:

- My stupid forum: a simple version of the http://stupidforum.com (by Miltos Manetas) without some of the nasty features (the need to press save quickly) and with a refresh mechanism. An admin panel that will allow the adminstrator to decide on the number of text areas, their size, etc. under construction.

- QuestionApp: a very simple poll/questionnaire based on DRBPoll <http://www.dbscripts.net/poll/> with the addition of a simple admin panel for configuring easily the question/answers. Additional configuration options (e.g., changing the SSID, possibly with a short version of the question) under construction.

You can see the applications running at: http://nethood.org/toolkit/
