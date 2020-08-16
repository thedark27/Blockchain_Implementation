# Property Registration and Land Record Management Via Blockchain
<ul>
  <li><b>About :- </b>In this project, we created an online panel using web
   technologies and blockchain technology for registration of
   property and also this panel is used to keep records of land
   registered.
  </li>
  <br>
  <li><b>PREREQUISITES :- </b>
    The software that are required for deployment of our project on system: - 
    <ul>
      <li>WampServer</li>
      <li>Visual Studio Code</li>
    </ul>
  </li>
  
  <br>
  <li><b>INSTALLING :- </b>
     How to install the above given software: -
    <ul>
      <li>For installing WampServer, prefer to this link https://sourceforge.net/projects/wampserver/ for downloading.And then after downloading open its installer where you      downloaded it and then install it.</li>
      <li>For installing Visual Studio Code, prefer to this link
https://code.visualstudio.com/download and then download it
according to your system architecture. And then open its
installer where you downloaded it and then install it.</li>
    </ul>
  </li>
  
  <br>
  <li><b>DEPLOYMENT :- </b>
    Some information about deployment of our project on live systems.
    <ul>
      <li>First of all, start your WampServer on your system. For this
go to search option and type Start WampServer and click on
it and then a dialogue box appears regarding permission,
click the yes option and then symbol of WampServer
appears on taskbar, wait until it becomes green which shows
that WampServer is active.</li>
      <li>Save the blockchain file of project in www directory. For this
follow this path: - Go to Local disk C ->Wamp folder ->www
folder.</li>
      <li>To Run these files, open browser and type <b>127.0.0.1/</b> then
folder name of project and then file name with extension.
For ex:-127.0.0.1/blockchain/seedata.php.</li>
    </ul>
  </li>
  
  <br>
  <li><b>MORE INFO. ABOUT PROJECT :- </b>
    <ul>
      <li>We created a form for entering data for registering land. On
submitting this form, these data are added to blockchain in
new block</li>
      <li>Our Panel has navigation bar which contains option to see
data from where you can see records of all registered land.</li>
      <li>We Use <b>SHA256 Algorithm</b> for generating valid hash of each
block.</li>
    </ul>
  </li>
  
  <br>
  <li><b>RUNNING THE PROGRAM/CODE: -</b>
   <ul>
      <li>Open the panel and enter all the required data in the form
and click on submit button.</li>
      <li>After that click on see data option to verify that data is
added to the blockchain or not. Here you check the block
no., nonce, prev hash, current hash and all the data of
registered land till now.</li>
     <li>Blockchain File is our project folder, there is <b>transaction_</b>
named files of different blocks containing data, index file,
see data file, form file, number file which is used to keep
block number at which the upcoming block is added and
output file which contains the hash of all the block files.</li>
    </ul>
  </li>
  
  <br>
  <li><b>TEST CASES :- </b> 
    <ul>
      <li><b>Test Case1 :- </b>you can check the correctness of project by
adding data in form and submit it and then check is data is
added to blockchain or not and also you can check folder of 
project where a new block file is added and block number in
number.txt is incremented by one.
   </li>
      <li><b>Test case2 :-</b> If someone try to change the data of registered
land then blockchain get break and an error is displaying on
see data page on panel which indicates that someone try to
change the data. <br> To check this case, go to the folder of project and open any
        of <b>transaction_</b> named file and change its data.After that go
to online panel and run the see data page, here you can see
that blockchain get break after that block whose data is
changed and a Warning message appears.</li>
    </ul>
  </li>
  
</ul>
<ul>
  <li><h3>AUTHOR</h3></li>
  <ul>
   <h4>ASHISH KAUSHAL</h4>
    <h4>SHOBHIT RAJ</h4>
  </ul>
</ul>
