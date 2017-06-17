# FUNICOM
SRS & System Design for FUNAAB Interactive Community
Documentation
Release 1.0.1





FUNICOM





June, 2017
 
TABLE OF CONTENTS

INTRODUCTION	4
1.1	Documentation Purpose	4
1.2	Project Scope	5
1.3	Intended Audience and Document Overview	5
1.4	Team Members	6
1.5	Document Conventions	7
1.6	References	7
OVERALL DESCRIPTION	8
2.1	Product Perspective	8
2.2	Product Functions	8
2.3	User Classes & Characteristics	9
2.4	Operating Environment	9
2.5	User Environment	9
2.6	Design/Implementation Constraints	10
2.7	Assumptions and Dependencies	10
EXTERNAL INTERFACES REQUIREMENTS	11
3.1	User Interfaces	11
3.2	Hardware Interfaces	11
3.3	Software Interfaces	11
3.4	Communication Protocols & Interfaces	12
SYSTEM FEATURES	13
4.1	Description and Priority	13
4.2	Functional Requirement	14
OTHER NON-FUNCTIONAL REQUIREMENT	15
5.1	Performance Requirement	15
5.2	Safety Requirement	15
5.3	Security Requirement	16
5.4	Software Quality Attributes	16
OTHER REQUIREMENT	17
6.1	Behavioural Requirements	17
SYSTEM DESIGN MODEL	19
APPENDIX A	Deﬁnitions, Acronyms and Abbreviations	23
APPENDIX B	INDEX	25

 
CHAPTER 1
INTRODUCTION


The development of FUNICOM is a Software Engineering Project developed by the 300L students of Class 2014 at the Federal University of Agriculture, Abeokuta under the guidance of Professor A. S. Sodiya.
FUNICOM is a place where FUNAABITE can share ideas, discuss issues and effectively collaborate with one another towards solving problems such as assignments and projects.

1.1	Documentation Purpose
The purpose of this document is to present a detailed description of FUNICOM. It will explain the purpose and features of the system, the interfaces of the system, what the system will do, the constraints under which it must operate and how the system will react to external stimuli. This document is intended for both the stakeholders and the developers of the system. The features discussed in this document are mainly functional requirements. These requirements are described in software development perspective to be easily grasp by user. It also covers the non-functional requirements like performance, reliability, availability, security and maintainability.

1.2	Project Scope
With the continued evolution in technology, forum is becoming more and more essential now-a-days. In FUNAAB, students can freely express their thoughts, ideas and discuss their challenges that they are currently facing with their studies. FUNICOM provides a convenient and easy-to-use graphical user interface.
FUNICOM is an Open Source software i.e. FUNABITES can utilize the resources available on portal without any cost. Therefore, it is going to be freely available. It is Platform- Independent and easy to operate and maintain.

1.3	Intended Audience and Document Overview
This document will be the ﬁrst guide for prospective software developers, project managers, testers and most importantly FUNAABITES. This document contains software functionality, software and hardware requirements and user documentation. 
• Developer: The developer who wants to read, change, modify or add new requirements into the existing program may need ﬁrst to consult this document and update the requirements in appropriate manner so as not to change the actual purpose of the system or make the system inconsistent. 
• User: The user of this program reviews the diagram and the speciﬁcation provided in the document and check to determine whether the software has all the suitable requirements and if the software developer have implemented all of them. He can also consult the user guide in the event of any confusion for clariﬁcations. 
• Tester: The tester needs this document to prepare his test cases to validate that the initial requirements of this project is actually implemented in the delivery.

1.4	Team Members

NAME	MATRIC
                       SUB-GROUP 1 (REQUIREMENT ENGINEERING)
FOLARIN ABIGAIL MOFEOLUWA	20141600
IBRAHEEM FAWAZ OLASUNKANMI	20141602
JEGEDE ROTIMI EMMANUEL	20141607
OLAWEPO USMAN AFOLABI	20141635
KUNYE OLUWADAMILOLA HANNAH	20141612
                                   SUB-GROUP 2 (SYSTEM DESIGN)
ODUKOYA SEYITAN VICTOR	20141622
OJO BOLUWATIFE EZEKIEL	20141627
SODIPO GIDEON OLAWALE	20141650
OLUKEHINDE OLUWASOMIDOTUN T	20141636
                                          SUB-GROUP 3 (CODING)
FAKOREDE MOSHOOD ABIOLA	20141595
OKUNUGA AMINAT MAKANJUOLA	20141628
OSENI SEGUN EMMANUEL	20141639
ILESANMI DAMILOLA FIDELIS	20141606
                       SUB-GROUP 4 (TESTING AND IMPLEMENTATION)
OBEMBE OLUWATOSIN ENIOLA	20141619
MOSHUD OLUWADAMILOLA TAWAHKALT	20141615
OLAJIDE BOSUNDE OLUTAYO	20141631
OSINFADE IDRIS ABIODUN	20141641


                       SUB-GROUP 5 (EVALUATION AND EVOLVING)
ONABANJO TITUS DAMILOLA	20141637
OYELUMADE ISRAEL TENIOLA	20141643
UZEDU OMOYEMEN FRANCES	20141655
VICTOR ADENUSI SHAMMAH	20141656
FADINA ADUNOLA O.	20122668

1.5	Document Conventions
In general, this document prioritizes in writing the requirements of the system and analysing in details the tools being provided to its users. Every requirement is having its own priority (none conﬂicting). In addition, few ﬁgures are also being provided to make requirements more clearly to the reader.

1.6	References
•	http://php.net/manual/en/language
•	http://dev.mysql.com/doc/en/
•	http://gitref.org

 
CHAPTER 2
OVERALL DESCRIPTION


2.1	Product Perspective
The product is supposed to be an open source, under the GNU general Public License. It is a web based system implementing client-server model. 

2.2	Product Functions
FUNICOM will provide simple mechanism for users to share and acquire knowledge. The following are the main features that are included in FUNICOM 
• Cross platform support: Offers operating support for most of the known and commercial operating systems provided it can access the internet. 
• User account: The system allows the user to create their accounts in the system and provide features of updating and viewing proﬁles. 
• Number of users being supported by the system: Though the number is precisely not mentioned but the system is able to support a large number of online users at a time. 
• Search: search is simply local search engine based on key words. 
• Discussion Forum: Provides users with a platform to discuss and help each other with their problems 
• FAQs section: Frequently asked section contain answer of problem/challenges which FUNABITES (esp. freshmen) frequently face.

2.3	User Classes & Characteristics
It is considered that the user should be able to read and understand English and also have the basic knowledge of surfing the internet and to have access to it. He also has to be a FUNAABITE.

2.4	Operating Environment
The main component of the FUNICOM project is the web based software application. The application is not resource- or graphics-intensive, so there are no practical hardware constraints. The app will rely on several web based functionalities of HTML and PHP so ensuring appropriate web standards will not be much a concern.  
The FUNICOM database will be stored on the server using MySQL and will be interfaced with a wrapper written in PHP 5.

2.5	User Environment
	The user will be able to access FUNICOM with the aid of a web enabled phone/computer, internet service connection

2.6	Design/Implementation Constraints
This system is provisioned to be built using PHP which is highly ﬂexible. Decision regarding which database to use should be taken into consideration due the fact that data being exchanged or stored is large, and the appropriate data management system will yield efﬁcient performance.
The system is likely to face the challenge of appropriate hosting package due to financial constraint hence reducing the processing speed and the overall performance of the web app

2.7	Assumptions and Dependencies
This is a web based system and hence will require the operating environment of the server to be able to run PHP code and MYSQL queries. 
For the users, this software highly depends on type and version of browser being installed in the system i.e. browser version to be used should have HTML5 & JavaScript support.
 
CHAPTER 3
EXTERNAL INTERFACES REQUIREMENTS

3.1	User Interfaces
The user interface for the software shall be compatible to any browser such as Microsoft Edge, Google Chrome or Mozilla Firefox by which user can access the system.
The user interface shall be implemented using HTML, JavaScript, CSS etc.
	
3.2	Hardware Interfaces 
Since the application must run over the internet, all hardware required to connect the device being used to the internet will be hardware interface for the system such as Modem, WAN – LAN, Ethernet Cross-Cable.

3.3	Software Interfaces
1.	The system shall communicate with the database to authenticate the user.
2.	The system shall load the avatar of each user for each comment they post.
3.	The system shall communicate with the database to respond to the search query sent

3.4	Communication Protocols & Interfaces 
The system shall use the HTTP protocol for communication over the internet.
The protocol used shall be HTTP.
The Port number used will be 80.
 
CHAPTER 4
SYSTEM FEATURES

4.1	Description and Priority

•	USER REGISTRATION
	When a first time user/guest is accessing FUNICOM, the user is presented with a registration dialog box on the top left corner of the screen. The screen prompts the user to create an account on the FUNICOM server using his/her matriculation number. The user also enters a “display name” which will be the name shown as their handle on the discussion threads.
•	THREAD CREATION
	On the homepage, the user is presented with a link that will enable him/her to create discussion threads. 
•	GUEST MODE
	Non registered users will be unable to post messages in the threads but will be able to view them. Guests will be unable to create and comment on threads.
•	FAQ
	There will be a page for questions that users are likely to ask and answers designed to satisfy such questions.
	
4.2	Functional Requirement
	Major functions of the Discussion Forums
•The system shall enable a user to view threads and their corresponding comments.
• The system shall enable a logged in user to create thread(s). 
• The system shall enable a logged in user to post comment

	Major functions of the Login and Registration System
• The system shall authenticate and login user to the web app. 
• The system shall enable new users to register to the system. 
• The system shall enable a registered user to view his proﬁle. Additional information like thread(s) created by him and comment(s) posted by him are also displayed.

	FAQs (frequently asked questions)
In this section, solutions to General problem that FUNAABITE frequently face is provided. FAQ contains solutions to general problems. Both Logged in user and Guest can see the Solution. 


CHAPTER 5
OTHER NON-FUNCTIONAL REQUIREMENT

5.1	Performance Requirement
The system must be interactive and the delays involved must be less than 1s. So in every action-response of the system, there are no immediate delays. In case of opening windows forms, of popping error messages and saving the settings or sessions there is delay much below 2 seconds.
 In case of opening databases, sorting questions and evaluation there are no delays and the operation is performed in less than 2 seconds for opening, sorting, computing, posting > 95% of the ﬁles. Also when connecting to the server the delay is based editing on the distance of the 2 systems and the conﬁguration between them so there is high probability that there will be or not a successful connection in less than 20 seconds for sake of good communication. 

5.2	Safety Requirement
Information transmission shall be securely transmitted to server without any changes in information 


5.3	Security Requirement
The main security concern is for users account hence proper login mechanism shall be used to avoid hacking as much as possible. 
System shall be able to protect privacy of user data. Profile of other users shall only be accessed by an authenticated user and any other user shall not be able to edit other user’s profile.

5.4	Software Quality Attributes
• Reliability 
As the system provide the right tools for discussion & problem solving it shall be made sure that the system is reliable in its operations and for securing the sensitive details.
• Availability 
If the internet service gets disrupted while sending information to the server, the system shall be made to receive the information again for veriﬁcation. 
 
• Usability
The system shall be made easy to handle and navigates in the most expected way with no delays. In that case the system program reacts accordingly and transverses quickly between its states.
 
CHAPTER 6
OTHER REQUIREMENT

6.1	Behavioural Requirements
Behavioural requirements of the system are described using use case view. The following use case diagrams summarize the functional and behavioural requirements of the FUNICOM.

 
 
 

SYSTEM DESIGN MODEL

 

 
 
 

 
APPENDIX A	Deﬁnitions, Acronyms and Abbreviations
• FUNAABITE: The students of Federal University of Agriculture, Abeokuta.
• THREAD: a series of newsgroup messages following a single topic.
• PHP: is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. PHP code may be embedded into HTML or HTML5 mark-up, or it can be used in combination with various web template systems, web content management systems and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interface (CGI) executable. The web server software combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page.
• MYSQL: is an open-source relational database management system (RDBMS). The MySQL development project has made its source code available under the terms of the GNU General Public License, as well as under a variety of proprietary agreements. Applications that use the MySQL database include: TYPO3, MODx, Joomla, WordPress, phpBB, MyBB, and Drupal. MySQL is also used in many high-profile, large-scale websites, including Google (though not for searches), Facebook, Twitter, Flickr, and YouTube.
• JavaScript: is a high-level, dynamic, interpreted run-time language. Alongside HTML and CSS, JavaScript is one of the three core technologies of World Wide Web content production; the majority of websites employ it, and all modern Web browsers support it without the need for plug-ins.
• HTML5: is a core technology mark-up language of the Internet used for structuring and presenting content for the World Wide Web. It is the ﬁfth revision of the HTML standard. It’s core aims have been to improve the language with support for the latest multimedia while keeping it easily readable by humans and consistently understood by computers and devices (web browsers, parsers, etc.). HTML5 is intended to subsume not only HTML 4, but also XHTML 1 and DOM Level 2 HTML.
• GIT: Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efﬁciency. Git allows groups of people to work on the same documents (often code) at the same time, and without stepping on each other’s toes.

 

 
APPENDIX B	INDEX


 
3
300L students	4
A
assignments	4
B
browser	11
C
Cross platform support	9
D
Developer	5
F
FAQs	13
FUNAABITE	4, 6
G
general Public License	9
Google	7
O
Open Source	5
R
References	8
S
Search	9
Software Engineering Project	4
T
TEAM MEMBERS	3
Tester	6
U
use case diagrams	15
User	5
 

