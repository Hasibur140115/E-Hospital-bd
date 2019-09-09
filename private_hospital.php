<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>

<title>Private Hospital</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

<link href="doc.css" rel="stylesheet" />

</head>
<body>

<!-- Menu Bar -->
<nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #23415C;">
  <a class="navbar-brand" href="#" style="color: white;"><h3>E_Hospital BD</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 6px;">
    <ul class="navbar-nav mr-auto" style=" padding-right: 5px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #fff;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #232827;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          Our srevice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #222829;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #222829;">Service Center</a>
          <a class="dropdown-item" href="test_center.php"style="color: #fff;background-color: #222829;">Test & Charges </a>
          <a class="dropdown-item" href="medicine_center.php"style="color: #fff;background-color: #222829;">Medicine Center</a>
          <a class="dropdown-item" href="blood_center.php"style="color: #fff;background-color: #222829;">Blood Center</a>
          <a class="dropdown-item" href="ambulance.php"style="color: #fff;background-color: #222829;">Ambulance Service</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dr.php"style="color: #fff;">Doctors</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="branch.php"style="color: #fff;">Branches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"style="color: #fff;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php"style="color: #fff;">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: #fff;">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php"style="color: #fff;">LogIn</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 6px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>

<!-- Fixed Font -->

<div id="home">
    <div class="landing-text">
      <h1>HOSPITAL</h1>
      <h3>The E_hospital is Only for You.</h3>
      <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">learn More</a></button>
      <h2><b>Get A Doctor Appoinment</b></h2>
    <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">appoinment</a></button>  
    </div>
 </div>
<!-- Fixed Body -->


<!-- Find Doctor -->
<div class="container-fluid" style="margin-top: 40px;">
 
    <div class="col"> 
      <center>
        <h2 style="font-family:'Alfa Slab One';">Private Hospital Info</h2>
      </center>
       </div>
</div><br><br>
<!-- Alignment -->


<!-- dr profile-->


<div class="container">
  <!-- Button to Open the Modal -->
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal1">
    Apollo Hospitals, Dhaka.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal2">
    Square Hospital Ltd.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal3">
    United Hospital Limited.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal4">
    Ibn-Sina Medical College & Hospital.
  </button>
    </div>
  </div><br>
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal5">
    Popular Specialized Hospital Ltd.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal6">
    Labaid Cardiac and Specialized Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal7">
    Ibrahim Cardiac Hospital & Research Centre.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal8">
    Forties escorts heart institute & AFC Health, Khulna, Bangladesh.
  </button>
    </div>
  </div><br>

  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal9">
    Islami Bank Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal10">
    Isphahani Islamia Eye Institute and Hospital (IIEI&H).
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal11">
    Ad-din Hospital Ltd.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal12">
    Centre For The Rehabilitation of the Paralyzed (CRP), Savar.
  </button>
    </div>
  </div><br>

  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal13">
    Gastro-liver Hospital And Research Institute.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal14">
    Green Life Medical College & Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal15">
    Holy family Red Crescent Medical College Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal16">
    Jahirul Islam Medical College Hospital.
  </button>
    </div>
  </div><br>
  
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal17">
    Japan- Bangladesh Friendship Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal18">
    Delta Hospital Ltd.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal19">
    Bangladesh Specialized Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal20">
    Uttara Crescent Hospital.
  </button>
    </div>
  </div><br>

   <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal21">
    Enam Medical College Hospital, Savar.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal22">
    Marie Stopes Health Clinic.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal23">
    Bangladesh Medical College Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal24">
    Al-Helal Specialist Hospital.
  </button>
    </div>
  </div><br>
  
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal25">
    Ayesha Memorial Specialized Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal26">
   Anwer Khan Modern Hospital Ltd, Dhaka.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal27">
    Central Hospital, Dhaka.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal28">
    Shamorita Hospital, Dhaka.
  </button>
    </div>
  </div><br>

  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal29">
    Lamb Hospital, Dinajpur
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal30">
    Zia Heart Foundation.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal31">
    Khwaja Yunus Ali Medical College and Hospital, Sirajganj.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal32">
    Jahirul Islam Medical College and Hospital, Kishorganj.
  </button>
    </div>
  </div><br>

   <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal33">
    Kumudini Medical College and Hospital, Tangail.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal34">
    Noorjahan Hospital, Sylhet.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal35">
    Oasis Hospital Sylhet.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal36">
    Jalalabad Ragib- Rabeya Medical College, Sylhet.
  </button>
    </div>
  </div><br>
  
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal37">
    TMSS Medical College and Hospital, Bogra.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal38">
   Fuad aL-Khatib Hospital, Cox’s bazaar.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal39">
    Chattagram Maa-Shishu o General Hospital.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal40">
    Chittagong Metropolitan Hospital Pvt Lltd.
  </button>
    </div>
  </div><br>

  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal41">
    Community Based Medical College Hospital , Bangladesh (CBMCH,B), Mymensingh.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal42">
    K Zaman BNSB Eye Hospital, Mymensingh.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal43">
    Prime Hospital (Pvt) Ltd, Noakhali.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal44">
    Prime Medical College Hospital, Rangpur.
  </button>
    </div>
  </div><br>
  
  <div class="row" >
    <div class="col">
      <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal45">
    Ambia memorial hospital, Barisal.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal46">
   Al-arafa clinic, Rajshahi.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal47">
    Islami Bank Medical College and Hospital, Rajshahi.
  </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal48">
    D Hospital Hatemkha ,Rajshahi.
  </button>
    </div>
  </div><br>


</div>
<br>

<!-- Alignment -->



<!-- Alignment -->

<!-- Alignment -->

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">জাতীয় কিডনী ইনষ্টিটিউট এবং হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hospital_image1.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">জাতীয় কিডনী ইনষ্টিটিউট এবং হাসপাতাল ২০০১ সালে প্রতিষ্ঠিত হয়। এটি একটি সরকারী হাসপাতাল। এই হাসপাতালটিতে কিডনী সমস্যায় জর্জরিত রোগীদের সেবা প্রদান করা হয়।</p>

            </div>
            
          </div><br>
          <p><b>ঠিকানা এবং অবস্থান</b></p>
          <ul>
            <li>হাসপাতালটি জাতীয় হৃদরোগ ইনষ্টিটিউট ও হাসপাতালের ১০০ গজ উত্তরে হাতের ডান পাশে এবং জাতীয় মানসিক ইনষ্টিটিউট হাসপাতালের দক্ষিন পাশে।</li>
            <li>শেরে বাংলা নগর, ঢাকা।</li>
            <li>ফোন: +৮৮-০২-৯১৩৬৫৫৬০-৩</li>
          </ul>
          <br>

          <p><b>হাসপাতাল ভবন</b></p>
          <ul>
            <li>হাসপাতাল ভবন ৩টি। ভবন তিনটি এ বি এবং সি ব্লকে বিভক্ত। প্রতিটি ভবনে দুটি করে লিফট রয়েছে। হাসপাতালের আইসিইউ এবং অপারেশন থিয়েটার এ ব্লকের ৩য় তলায় লিফটের ডানে অবস্থিত।  ব্লাড ব্যাংকটি বামে অবস্থিত। হাসপাতালের তৃতীয় তলায় নামাজের জন্য জায়গা রয়েছে।</li>
          </ul>
          <br>

          <p><b>ডাক্তার</b></p>
          <ul>
            <li>হাসপাতালের মোট ডাক্তারের সংখ্যা ৪০ জন এবং বিশেষজ্ঞ ৩ জন। তিনটি শিফটে ডাক্তারগন দায়িত্ব পালন করে থাকেন। প্রতি শিফটে ৯ জন করে ডাক্তার বসেন।</li>
          </ul>
          <br>
          <p><b>টেস্ট</b></p>
          <ul>
            <li>
              এখানে সাধারনত কিডনী সম্পর্কিত বিভিন্ন প্রকার টেস্ট করা হয়। সরকারী হাসপাতাল হওয়ায় সাধারনত টেস্টের জন্য কোন প্রকার ফি দিতে হয় না। কয়েকটি টেস্টের নাম; (০১) নিথোট্রিপাস; (০২) হেমোডায়ালাইসিস; (০৩) রেডিওলজি এন্ড ইমেজিং (০৪) ইউরোলজী; (০৫) ফিজিওলজী।
            </li>
          </ul>
          <br>
          <p><b>রোগী ভর্তি</b></p>
          <ul>
            <li>
              এখানে রোগী ভর্তির জন্য প্রথমে অনুসন্ধান কেন্দ্রে যোগাযোগ করতে হয়। ২৫ টাকা দিয়ে ভর্তি ফরম পূরন করতে হয়। তারপর সংশ্লিষ্ট ডাক্তার রোগী দেখার পর হাসপাতালে ভর্তি নেওয়া হয়।
            </li>
          </ul>
          <br>

          <p><b>বহি:র্বিভাগ সেবা</b></p>
          <ul>
            <li>
              এই বিভাগে সাধারনত কিডনী সম্পর্কিত যাবতীয় সমস্যা বা রোগের চিকিৎসা সেবা প্রদান করা হয়। এখানে প্রত্যেহ ৮ জন করে ডাক্তার বসেন। বহি:র্বিভাগে রোগী দেখানোর জন্য ১০ টাকা মূল্যের টিকিট ক্রয় করতে হয়।
            </li>
          </ul><br>

          <p><b>এ্যাম্বুলেন্স সুবিধা</b></p>
          <ul>
            <li>
              এই হাসপাতালের নিজস্ব এ্যাম্বুলেন্স রয়েছে ৩টি। হাসপাতালে রোগী পরিবহনের কাজে এ্যাম্বুলেন্সগুলো ব্যবহৃত হয়ে থাকে। এ্যাম্বুলেন্স সুবিধা পেতে হাসপাতালের অনুসন্ধান কেন্দ্রে যোগাযোগ করতে হয়। যোগাযোগ নম্বর +৮৮-০১৭২২-৭২০৮৯৪৩। ঢাকার মধ্যে রোগী পরিবহনের জন্য এ্যাম্বুলেন্সের ভাড়া ৩৫০ টাকা।
            </li>
          </ul><br>
          <p><b>কেবিন / ওয়ার্ড</b></p>
          <ul>
            <li>হাসপাতালে মোট ওয়ার্ড ৭টি।</li>
            <li>মোট কেবিন ৩২টি।</li>
            <li>সিট ৩৫০ টি।</li>
            <li>কেবিন ভাড়া দৈনিক ৪৫০ টাকা এবং সিট ভাড়া দৈনিক ২৫০ টাকা।</li>
            <li>এই হাসপাতালে জটিল রোগীর জন্য সবসময় সিট পাওয়া যায়।</li>
          </ul>
          <br>

          <p><b>ঔষধ বিপনন সেবা</b></p>
          <ul>
            <li>
              হাসপাতালের রোগীদের জন্য এখানে বিনামূল্যে ঔষধ প্রদান করা হয়। তবে কিছু কিছু ঔষধ বাহির থেকে কিনে নিতে হয়। হাসপাতালের কাছাকাছি ঔষধের দোকান রয়েছে।
            </li>
          </ul><br>

          <p><b>অগ্নি নির্বাপন এবং নিরাপত্তা ব্যবস্থা</b></p>
          <ul>
            <li>
              হাসপাতালে পর্যাপ্ত অগ্নি নির্বাপন এবং নিরাপত্তা ব্যবস্থা রয়েছে।
            </li>
          </ul><br>
          <p><b>গাড়ি পার্কিং</b></p>
          <ul>
            <li>
              গাড়ি পার্কিংয়ের জন্য এখানে নিজস্ব পার্কিং স্পেস রয়েছে। গাড়ি পার্কিংয়ের জন্য কোন প্রকার চার্জ দিতে হয় না। এখানে ২০-২৫ টি গাড়ি পার্ক করা যায়।
            </li>
          </ul><br>
          <p><b>নার্স এবং ব্রাদার</b></p>
          <ul>
            <li>
              হাসপাতালে নার্সের সংখ্যা ১৪৫ জন এবং ব্রাদারের সংখ্যা ২৫ জন। এখানে নার্স এবং ব্রাদারগন প্রশিক্ষিত।
            </li>
          </ul><br>
          <p><b>গরীব রোগীদের জন্য বিশেষ সুবিধা</b></p>
          <ul>
            <li>
              এখানে গরীব রোগীদের বিনা খরচে চিকিত্সা সেবা প্রদান করা হয়। গরীব রোগীদের থাকা, খাওয়া, ঔষধ খরচ এবং প্রয়োজনের ব্লাড ব্যাংক থেকে রক্ত পরীক্ষার বিশেষ সুবিধা পাওয়া যায়। হাসপাতালের সমাজ কল্যান কার্যালয় থেকে গরীব এবং দুস্থ রোগীদের ঔষধ, রক্ত, খাওয়ার জন্য অর্থায়ন এবং দাফন কাফনের ব্যবস্থা করা হয়।
            </li>
          </ul><br>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">শহীদ সোহরাওয়াদী মেডিকেল কলেজ হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos1.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">শহীদ সোহরাওয়াদী  হাসপাতাল  ১৯৬৭ সালে প্রতিষ্ঠিত হয়। প্রতিষ্ঠালগ্ন থেকে শুরু করে বর্তমান পর্যন্ত  এই হাসপাতালটি সাধারণ মানুষের  চিকিৎসা সেবা প্রদান করে আসছে । ২০০৫ সালে এই হাসপাতালটিতে মেডিকেল কলেজের কার্যক্রম শুরু করে । বর্তমানে এই হাসপাতালটি শহীদ সোহরাওয়াদী  মেডিকেল কলেজ ও হাসপাতাল নামে পরিচিত।</p>
            </div>
            
          </div><br>
          <h3>ঠিকানা  ও যোগাযোগ</h3>
              <p>শেরে-বাংলানগর,  ঢাকা- ১২০৭।</p>
              <p>মোবাইল:  +৮৮-০২-৯১৩০৮০০-১৯</p>
              <p>ওয়েব: <a href="www.shsmc.edu.bd" target="_blank">www.shsmc.edu.bd</a></p>


          <h3>অবস্থান</h3>
          <p>শহীদ সোহরাওয়াদী  হাসপাতাল  ঢাকার শেরে-ই-বাংলা নগরে জাতীয় হৃদরোগ ইনষ্টিটিউট এর পাশে অবস্থিত ।</p><br>
        

          <h3>অনুসন্ধান ডেস্ক  ও   এ্যাম্বুলেন্স :</h3>
          <p>হাসপাতালে চিকিৎসা প্রার্থী রোগীদের প্রয়োজনীয় তথ্য সরবরাহের জন্য এই হাসপাতালে একটি অনুসন্ধানকেন্দ্র রয়েছে । এটি হাসপাতালের প্রবেশ পথেই  অবস্থিত । অসুস্থ রোগীদের আনা নেয়ার জন্য এখানে ৩ টি এ্যাম্বুলেন্স রয়েছে ।</p><br>

          <h3>বহির্বিভাগে  চিকিৎসা সেবা :</h3>
          <p>অন্য  সব সরকারী হাসপাতালের মত শহীদ সোহরাওয়ার্দী  হাসপাতালেও  বহির্বিভাগে এমবিবিএস ও বিশেষজ্ঞ ডাক্তার রোগীদের স্বাস্থ্য সেবা দিয়ে   থাকে । বহির্বিভাগে  ডাক্তার দেখাতে হলে প্রথমে কাউন্টার থেকে ১০ টাকা মূল্যের টিকেট কাটতে হবে । অনুসন্ধান কক্ষের ডান দিকে ৩ টি বহির্বিভাগ কাউন্টার রয়েছে । কাউন্টারে রোগী গেলে কাউন্টারে দায়িত্বশীল ব্যাক্তি রোগীর কাছ থেকে তার সমস্যা বা রোগের লক্ষণ শুনে ঐ রোগ সম্পর্কিত  বিভাগে রোগীকে পাঠিয়ে দেয় । এখানে মেডিসিন, ডেন্টাল, শিশু বিকাশ কেন্দ্র, অর্থোপেডিক ও ট্রমা সার্জন, চর্ম ও যৌন রোগ, শিশু, গাইনী, শিশু সার্জারী, এ্যাজমা সেন্টার, নিউরোলজি ও কার্ডিওলজি বিভাগসহ মোট ১১ টি বিভাগ রয়েছে । বহির্বিভাগ  প্রতিদিন সকাল ০৮.০০ ঘটিকা হইতে দুপুর ০২.০০ ঘটিকা পর্যন্ত খোলা থাকে ।</p><br>

          <h3>যে সকল রোগের অপরেশন করা হয় :</h3>

          <p>এই মেডিকেল কলেজ হাসপাতালে হৃদরোগের অপারেশন ছাড়া অন্যান্য রোগের জটিল অপারেশন সম্পন্ন হয়ে থাকে ।</p>
          <p>অপারেশন চার্জ :</p>
          <ul>
            <li>পেয়িং বেড মাইনর অপারেশন  - ৫০০ টাকা ।</li>
            <li>পেয়িং বেড  মেজর অপারেশন  - ১০০০ টাকা।</li>
            <li>কেবিন বেড মাইনর অপারেশন - ১০০০ টাকা</li>
            <li>কেবিন বেড মেজর অপারেশন   - ২০০০ টাকা</li>
          </ul>
          <br>

          <h3>আর্থিক ভাবে  অসচ্চল রোগীদের জন্য বিশেষ সুবিধা :</h3>
          <p>দরিদ্র ও অসহায় রোগীরা সমাজ সেবা কার্যালয়ে যোগাযোগ করে ঔষধ পত্রসহ বিভন্ন টেষ্ট ও সিট ভাড়ার ক্ষেত্রে আর্থিক সুবিধা পেতে পারেন। সমাজ সেবা কার্যালয় হাসপাতালের নিচতলায় ব্লক -৬ এ অবস্থিত।</p><br>

          <h3>রোগী ভর্তি হতে করনীয় :</h3>
          <p>রোগী হাসপাতালে ভর্তি হতে হলে প্রথমে হাসপাতালের বহির্বিভাগে  গিয়ে ডাক্তার দেখাতে হবে। ডাক্তার রোগীকে পরীক্ষা নিরীক্ষা করে হাসপাতালে ভর্তি হতে বললে ১০ দিনের সিট ভাড়া অগ্রিম প্রদান করা সহ প্রয়োজনীয় আনুষ্ঠানিকতা সম্পন্ন করার পর সিট খালি থাকা সাপেক্ষে রোগীকে হাসপাতালে ভর্তি নেওয়া হয়, জরুরী প্রয়োজনে সিট খালি না থাকলে রোগী ভর্তি নেওয়া  হয় না। সিট পাওয়ার জন্য হাসপাতালের ২য় তলার রেন্ট কালেকশন বিভাগে যোগাযোগ করতে হয়। এই হাসপাতালে মোট ৩০টি কেবিন ও ১১টি ওয়ার্ড রয়েছে। বেড প্রতিদিন-২২৫টাকা ভাড়া । কেবিন বেড প্রতিদিন ৩৭৫ টাকা।</p><br>

          <h3>প্যাথলজিক্যাল টেষ্ট ডিসপেনসারি :</h3>
          <p>সঠিক ভাবে রোগ নির্ণয়ে প্যাথলজিক্যাল টেষ্ট অত্যান্ত জরুরী। এখানে সব ধরনের টেস্টের ব্যবস্থা রয়েছে। এই মেডিকেল কলেজের নিজস্ব ডিসপেনসারীটি অনুসন্ধান কক্ষের বাম পাশে অবস্থিত । ডিসপেনসারী থেকে নির্ধারতি কিছু ঔষধ রোগীদের বিনামূল্যে সরবরাহ করা হয়। এছাড়া অন্যান্য ঔষধ কিনতে হলে হাসপাতালের উল্টোদিকে বেশ কিছু ঔষধের দোকান রয়েছে । এই হাসপাতালের ১টি ব্লাড ব্যাংক রয়েছে যা হাসপাতালের নিচতলায় অবস্থিত। ব্লাড ব্যাংক অগ্রিম রক্ত মজুদ থাকে না তবে রোগীকে যদি কেউ রক্ত দিতে চায় সেক্ষেত্রে ব্লাড ব্যাংক রক্ত নিয়ে পরীক্ষা করার পর রোগীকে দেওয়া হয়। রক্তের গ্রুপ জেনে রাখা ভাল। জুরুরী অবস্থায় সময় সাশ্রয় হয়।</p><br>

          <h3>পোষ্টমর্টেম ও লাশ খোঁজার প্রক্রিয়া:</h3>
          <ul>
            <li>হাসপাতালে কোন রোগীর মুত্যুর পর পোষ্টেমর্টেমের প্রয়োজন হলে লাশ ঢাকা মেডিকেল কলেজ হাসপাতালে পাঠিয়ে দেওয়া হয়।</li>
            <li>এখানে লাশ খোঁজার জন্য ওয়ার্ড মাস্টারের সাহায্য নিতে  হয়।</li>
          </ul>
          <br>
          <h3>বিশেষজ্ঞ  ডাক্তার ‌ও নার্স :</h3>
          <p>এই হাসপাতালে উচ্চ ডিগ্রীধারী বিশেষজ্ঞ ডাক্তারদের চেম্বার রয়েছে।  হাসপাতালে রোগীদের পরিচর্যার জন্য ১৭৪ জন নার্স কর্মরত আছে।</p><br>
          <h3>লিফট, গাড়ি পার্কিং ও অন্যান্য : </h3>
          <ul>
            <li>লিফটের সুবিধা ও ১০০টি গাড়ি পার্কিং এর জন্য ব্যবস্থা রয়েছে এই হাসপাতালে।</li>
            <li>গাড়ি পার্কিং এর জন্য কোন চার্জ প্রযোজ্য নয়।</li>
            <li>হাসপাতালের নীচতলার বাম দিকে পুরুষদের ও মহিলাদের জন্য আলাদা ৩টি করে টয়লেট রয়েছে।</li>
            <li>অগ্লিকান্ড জনিত দূর্ঘটনারোধে হাসপাতালের নিজস্ব অগ্লিনির্বাপন ব্যবস্থা রয়েছে।</li>
          </ul>
         <br>
        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">জাতীয় ক্যান্সার গবেষণা ইনস্টিটিউট ও হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos2.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">জাতীয় ক্যান্সার গবেষণা ইনস্টিটিউট ও হাসপাতাল ১১ আগস্ট, ২০০৯ ইং সালে যাত্রা শুরু করে। এই হাসপাতালটিতে যারা ক্যান্সার রোগে আক্রান্ত তাদের সেবা প্রদান করা হয়।</p>
            </div>
            
          </div><br>
          <h3>ঠিকানা  ও যোগাযোগ</h3>
              <p>মহাখালী, ঢাকা- ১২১২।</p>
              <p>ফোন: +৮৮- ০২- ৯৮৮০০৭৮,  +৮৮-০২-৮১১১১৬৯</p><br>


          <h3>অবস্থান</h3>
          <p>মহাখালীতে অবস্থিত জাতীয় বক্ষব্যাধি হাসপাতালের ৫০ গজ উত্তরে জাতীয় ক্যান্সার ইনস্টিটিউট ও গবেষণা ইনস্টিটিউট ও হাসপাতালের অবস্থান।</p><br>
        

          <h3>বর্হি বিভাগ</h3>
          <ul>
            <li>এখানে সকাল ৮.৩০ মিনিট থেকে দুপুর ২.৩০ মিনিট পর্যন্ত বহির্বিভাগে রোগী দেখা হয়। তবে সরকারী ছুটির দিনগুলোতে এখানে রোগী দেখা হয় না।</li>
            <li>এই হাসপাতালের বহির্বিভাগে সাধারণত ক্যান্সারে আক্রান্ত রোগীদের সেবা দেওয়া হয়।</li>
            <li>হাসপাতালটি বহির্বিভাগের ডাক্তার দেখানোর জন্য ১০ টাকা দিয়ে একটি টিকেট সংগ্রহ করতে হয়।</li>
          </ul><br>

          <h3>রোগী ভর্তি</h3>
          <p>এই হাসপাতালে রোগীকে ভর্তি করার জন্য প্রথমে অনুসন্ধান কেন্দ্রে যেতে হয়। এখানে গিয়ে ১৫ টাকা দিয়ে একটি ফরম পূরণ করতে হয়। তার পর জরুরী বিভাগে নিয়ে যেতে হয়। রোগীকে দেখার পর রোগের অবস্থা অনুযায়ী রোগীকে ভর্তি করা হয়।</p><br>

          <h3>ডাক্তার</h3>

          <p>এই হাসপাতালে ডাক্তারের সর্বমোট সংখ্যা ৮৫ জন এবং ৮ জন বিশেষজ্ঞ। প্রতি শিফটে ২৫ জন করে ডাক্তার থাকেন।</p>
          <p>এ্যাম্বুলেন্স</p>
          <ul>
            <li>এখানে ৮ টি এ্যাম্বুলেন্স রয়েছে। এ্যাম্বুলেন্সে গুলো গুরুতর অসুস্থ রোগীদের স্থানান্তর করে থাকে।</li>
            <li>ঢাকা মহানগরীর মধ্যে এ্যাম্বুলেন্স ভাড়া দিতে হয় ৬০০ টাকা।</li>
            <li>এ্যাম্বুলেন্সের জন্য এই নম্বরে +৮৮-০২-৯৮৮০০৭৮ যোগাযোগ করা যায়।</li>
          </ul>
          <br>

          <h3>কেবিন ও ওয়ার্ড</h3>
          <p>এখানে ৯ টি ওয়ার্ড ও ৩০ টি কেবিনে মোট ৫২০ টি আসন রয়েছে।</p><br>

          <h3>নার্স ও ব্রাদার</h3>
          <p>এখানে প্রশিক্ষণপ্রাপ্ত ২০০ জন নার্স ও ২৫ জন ব্রাদার রয়েছে।</p>
          <p>নার্স ও ব্রাদার সরকারীভাবে নিয়োগপ্রাপ্ত।</p><br>

          <h3>গরীব রোগী</h3>
          <p>এখানে গরীব রোগীদের বিনা খরচে চিকিৎসা সেবা প্রদান করা হয়। গরীব রোগীদের থাকা, খাওয়া, ঔষধ খরচ এবং প্রয়োজনে ব্লাড ব্যাংক থেকে রক্ত পরীক্ষার বিশেষ সুবিধা পাওয়া যায়। হাসপাতালের সমাজ কল্যাণ কার্যালয় থেকে গরীব এবং দুস্থ রোগীদের ঔষধ ও খাওয়ার জন্য অর্থায়নের ব্যবস্থা করে দেয়া হয়।</p><br>

          <h3>ঔষধ</h3>
          <ul>
            <li>এ ভবনের নিচতলায় একটি ঔষধের কক্ষ রয়েছে। এখান থেকে রোগীদের বিনামূল্যে ঔষধ দেওয়া হয়। তবে কিছু ঔষধ রোগীকে দোকান থেকে কিনে নিতে হয়।</li>
            <li>হাসপাতালের উত্তরে মূল ফটকের পাশে বেশ কয়েকটি ঔষধের দোকান রয়েছে। এই দোকানগুলো সকাল ৯ টা থেকে রাত ১১. ৩০ মিনিট পর্যন্ত খোলা থাকে।</li>
            <li>এই দোকানগুলোতে দেশী-বিদেশী সকল ধরনের ঔষধ পাওয়া যায়</li>
          </ul>
          <br>
          <h3>অগ্নি নির্বাপণ</h3>
          <p>হাসপাতালে অগ্নি নির্বাপণের জন্য ফায়ার এক্সটিংগুইসার ও বালির বালতি রয়েছে।</p><br>

          <h3>ভবন </h3>
          <ul>
            <li>এই ইনস্টিটিউট ও হাসপাতালে দুইটি ভবন রয়েছে।</li>
            <li>ভবন দুটিতে এ,বি ও সি ব্লক নামে তিনটি করে ব্লক রয়েছে।</li>
            <li>প্রত্যেক ভবনে রোগী ডাক্তার ও স্বজনদের চলাচলে লিফট সুবিধা রয়েছে।</li>
            <li>এই হাসপাতালে কেবিন/ ওয়ার্ড রয়েছে।</li>
            <li>এই হাসপাতালের আই.সি.ইউ,ব্লাড ব্যাংক,অপারেশন থিয়েটার বি ভবনের ৩য় তলায় অবস্থিত।</li>
            <li>হাসপাতালের এ ভবনের ৩য় তলায় নামাযের ব্যবস্থা রয়েছে।</li>
          </ul>
         <br>
         <h3>গাড়ি পার্কিং</h3>
         <p>গাড়ি পার্কিংয়ের জন্য হাসপাতাল কমপ্লেক্সেই জায়গা রয়েছে। যেখানে ১৫০ টি গাড়ি পার্কিং করা যায়। গাড়ি পার্কিংয়ের জন্য চার্জ দিতে হয় না।</p>
         <h3>অভিযোগ</h3>
         <p>
হাসপাতালে কোন অনিয়ম এবং রোগীর সাথে খারাপ আচরণ হাসপাতালের কোন স্টাফ করলে অথবা যেকোন সমস্যার জন্য আনুষ্ঠানিকভাবে হাসপাতালের পরিচালকের কাছে বা স্বাস্থ্য মন্ত্রণালয়ে অভিযোগ করা যায়। যোগাযোগ: +৮৮-০১৭৩৩-০৭৭৭২২।</p>
        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">ঢাকা মেডিকেল কলেজ হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos3.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">ঢাকা মেডিকেল কলেজ হাসপাতাল ১৯৪৬ সালে প্রতিষ্ঠিত হয়। মেডিকেল শিক্ষা, গবেষণা এবং চিকিৎসা সেবা নিয়ে এই শিক্ষা প্রতিষ্ঠানটি  গড়ে উঠেছিল। এই প্রতিষ্ঠানটিকে  দেশের সেরা মেডিকেল কলেজ হাসপাতাল হিসেবে ধরা হয়।</p>
            </div>
            
          </div><br>
          <h3>ঠিকানা  ও যোগাযোগ</h3>
          <ul>
            <li>বকশী বাজার, ১০০ রমনা,ঢাকা-১০০০</li>
            <li>ফোনঃ  +৮৮-০২-৮৬২৬৮১২-১৯, +৮৮-০২-৮৬২৬৮২৩</li>
            <li>ফ্যাক্সঃ ৮৬১৫৯১৯</li>
            <li>ই-মেইলঃ  info@dmc.edu.bd</li>
            <li>ওয়েবঃ  www.dmc.edu.bd</li>
          </ul>
              <br>


          <h3>কলেজ এবং হাসপাতাল সম্পর্কে তথ্যঃ</h3>
          <p>কলেজ:</p>
          <ul>
            <li>এতে ১২টি ডিপার্টমেন্ট এবং ৮ টি ল্যাবরোটরি রয়েছে।</li>
            <li>শিক্ষকের সংখ্যা প্রায় ২০০ জন এবং ছাত্রসংখ্যা  ১০০০ এর উপরে।</li>
            <li>প্রতি বছর ১৮০ জন ছাত্র-ছাত্রী স্নাতক কোর্সে ভর্তি হয়।</li>
            <li>এদের ৩৯ টি স্নাতকোত্তর কোর্স রয়েছে।</li>
            <li>স্নাতকোত্তর কোর্সে প্রায় ১১০০ এমবিএস ছাত্র এবং ৯০০ ডাক্তার রয়েছে।</li>
          </ul>
          <br>
        
          <h3>হাসপাতালঃ</h3>
          <ul>
            <li>এতে ২৫ টি ডিপার্টমেন্ট,৪৮ ইউনিট এবং ৪৫ টি ওয়ার্ড রয়েছে।</li>
            <li>প্রায় ২৩৪ জন ডাক্তার এবং ৩৮০ ইন্টার্নী রয়েছে।</li>
            <li>৫৬০ জন নার্স এবং স্টাফের সংখ্যা প্রায় ১১৩৭ জন।</li>
            <li>ওয়ার্ড,ইউনিট এবং কেবিনে বেডের সংখ্যা ১৭০০। সাধারন বেড ১৪৪১ টি,উন্নত বেড ১৪৩ টি, ডাবল কেবিন ৪৩ টি এবং সিঙ্গেল বেডের সংখ্যা ৩০ টি।</li>
            <li>এখানে ইনডোর এবং আউটডোর দুইভাবেই রোগীদের সেবা দেওয়া হয়।</li>
            <li>প্রতিদিন প্রায় ৩০০০ রোগীকে আউটডোরে সেবা দেওয়া হয়।</li>
          </ul><br>

          <h3>যে যে রোগের বিশেষজ্ঞ ডাক্তার পাওয়া যায়ঃ</h3>
          <ul>
            <li>ক্যান্সার</li>
            <li>কার্ডিক</li>
            <li>ডেন্টাল</li>
            <li>এনডোকরিন</li>
            <li>নাক, কান ,গলা</li>
            <li>চোখ</li>
            <li>গ্যাস্ট্রএন্ট্রেরলজি</li>
            <li>জাইনাকোলজি</li>
            <li>মেডিসিন</li>
            <li>নিউরোলজি</li>
            <li>অবস্টেট্রিক</li>
            <li>অর্থোপেডিক</li>
            <li>পেডায়াট্রিক/শিশুরোগ</li>
            <li>রেনাল/বৃক্কঘটিত</li>
            <li>স্কিন ভিডি</li>
            <li>সার্জারি</li>
            <li>ইউরোলজি</li>
            <li>ভ্যাসকিন/টিকা</li>
          </ul><br>

          <h3>রোগীর সেবা সমূহঃ</h3>
          <ul>
            <li>ফ্রি চিকিৎসা সুযোগ</li>
            <li>সিসিইউ</li>
            <li>ডায়ালিসিস</li>
            <li>ই.সি.জি</li>
            <li>দুর্ঘটনাকবলিত রোগীর জরুরী ভর্তি</li>
            <li>জরুরী বিভাগ</li>
            <li>ফ্রি বেড</li>
            <li>আইসিইউ</li>
            <li>অপারেশন থিয়েটার</li>
            <li>নিজস্ব ব্লাড ব্যাংক</li>
            <li>নিজস্ব ডায়াগনস্টিক ল্যাব</li>
            <li>অক্সিজেন সাপ্লাই</li>
            <li>ফিজিওথেরাপি</li>
            <li>আলট্রাসনগ্রাফি</li>
            <li>এক্স-রে</li>
            <li>এক্স-রে</li>
            <li>স্টাফদের জরুরী মেডিকেল টেনিং ব্যবস্থা</li>
            <li>টিকা</li>
            <li>পোষ্ট অপারেটিভ বেড</li>
            <li>ভেনটিলেশন</li>
            <li>ফার্মেসি</li>
            <li>এ্যাম্বুলেন্স ব্যবস্থা</li>
            <li>ক্যান্টিন/ক্যাফেটেরিয়া</li>
            <li>ওয়েটিং রুম</li>
            <li>ওয়েটিং রূমে টিভি এবং পত্রিকার ব্যবস্থা</li>
          </ul><br>

          <h3>এ্যাম্বুলেন্সঃ</h3>

          <p>মোট এ্যাম্বুলেন্স সংখ্যা ৪ টি। এদের কোন এসি এ্যাম্বুলেন্স নেই। গাড়ির ভেতরে রোগীসহ ৬ থেকে ৭ জন থাকতে পারে। গাড়ির ভেতরে শুধু অক্সিজেন সিলিন্ডার আছে। এছাড়া রক্ত,ফাস্ট এইড,এসির ব্যবস্থা নেই।</p>
          <p>ঢাকা সিটির ভিতরে ৩০ কিঃ মিঃ পর্যন্ত সর্বনিম্ন ভাড়া ৩০০ টাকা। ৩০ কিঃ মিঃ অতিক্রম করার পর প্রতি কিঃ মিঃ অনুযায়ী ১০ টাকা চার্জ দিতে হয়। সাধারণত ঢাকার বাইরে তাদের এ্যাম্বুলেন্স যায় না। ঢাকা মেডিকেল থেকে উত্তরা এবং যাত্রাবাড়ীর সানারপাড় পর্যন্ত ৩০০ টাকা ভাড়া।</p>
          <p>ভাড়া অগ্রীম পরিশোধ করা যায় আবার রোগী আনা নেওয়ার পর ভাড়া পরিশোধ করা যায়।</p><br>

          <h3>হট-লাইন যোগাযোগ:</h3>
          <p>মোবাইল:  +৮৮-০১৯১১-২৬৯৪৪৯।</p>
          <p>ফোন:  +৮৮-০২-৮৬২৬৮১৩</p>
          <p>ফ্যাক্স: ২৭৪০</p><br>

        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">বঙ্গবন্ধু শেখ মুজিব মেডিকেল বিশ্ববিদ্যালয় হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos4.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">১৯৬৫ সালে প্রতিষ্ঠিত ইনস্টিটিউট অব পোস্ট গ্রাজুয়েট মেডিকেল রিসার্চ (আইপিজিএমআর) কে ১৯৯৮ সালে মেডিকেল বিশ্ববিদ্যালয়ে রুপান্তরিত করা হয়।উচ্চতর মেডিকেল শিক্ষা এবং গবেষণার লক্ষ্য নিয়ে বিশ্ববিদ্যালয়টির যাত্রা শুরু হয়েছিল।এই প্রতিষ্ঠানটি  বাংলাদেশের সর্বোচ্চ চিকিৎসাকেন্দ্র এবং চিকিৎসা শিক্ষাকেন্দ্র হিসেবে পরিচিত। </p>
            </div>
            
          </div><br>
          <h3>ঠিকানা  ও যোগাযোগ</h3>
          <ul>
            <li>শাহবাগমোড়ে জাতীয় জাদুঘরের উত্তরে এই হাসপাতালটির অবস্থান।</li>
            <li>ফোন: +৮৮-০২-৯৬৬১০৫১-৫৬, +৮৮-০২-৯৬৬১০৫৮-৬০</li>
            <li>ওয়েব: www.bsmmu.org</li>
          </ul>
              <br>


          <h3>বিশ্ববিদ্যালয় হাসপাতালটির বর্ননা</h3>
          <p>শাহবাগে অবস্থিত এই মেডিকেল বিশ্ববিদ্যালয়টিতে মোট পাঁচটি বহুতল ভবন আছে; ব্লক এ, বি, সি, ডি এবং কেবিন ব্লক। শিক্ষা,গবেষণা এবং চিকিৎসা সমান্তরালভাবে চলে এই মেডিকেল বিশ্ববিদ্যালয়টিতে। </p>
          <h3>ব্লক- এ</h3>
          <p>এ- ব্লকটি সাত তলা বিশিষ্ট,লাইব্রেরী,লেকচার থিয়েটার,অডিটোরিয়াম,হাসপাতালের রেকর্ড শাখা,ছাত্র হোস্টেল,ডেন্টাল অনুষদ এবং ব্লাড ট্রান্সফিউশন বিভাগের অবস্থান এই ভবনটিতে।</p>
          <h3>ব্লক- বি</h3>
          <ul>
            <li>বি ব্লকটি ছয় তলা ভবন, এর পূর্ব অংশে উপাচার্যের অফিস, প্রশাসনিক বিভিন্ন অফিস, কন্ট্রোলার অফিস, অভ্যর্থনা কেন্দ্র, কনফারেন্স হল, রেডিওলজি বিভাগ, ডিজিটাল লাইব্রেরী, হাসপাতালের রন্ধন কেন্দ্র, রক্ষণাবেক্ষণ কেন্দ্র, এন্ডোসকপি কক্ষ, সিটি স্ক্যান ও এমআরআই কক্ষ এবং কর্তব্যরত চিকিৎসক এবং নার্সদের থাকার ব্যবস্থা আছে।</li>
            <li>বি ব্লকের পশ্চিম অংশ নয় তলা বিশিষ্ট,এনাটমি,ফিজিওলজি,বায়োকেমিস্ট্র,ফার্মাকোলজি,প্যাথলজি, হেমাটোলজি,ভাইরোলজি এবং মাইক্রোবায়োলজিসহ প্রায় সবগুলো বিভাগের অবস্থান এখানে। ওয়ানস্টপ ল্যাববেরটরী সেবাও দেয়া হয় বি ব্লকের নিচ তলা থেকে।</li>
            <li>১০ তলা ভবন নিয়ে সি ব্লকটি হচ্ছে মূল হাসপাতাল ভবন। হাসপাতাল পরিচালকের অফিসসহ পরিচালকের অন্যান্য অফিস, অভ্যর্থনা কেন্দ্র, টেলিফোন এক্সচেঞ্জ, পিজিক্যাল মেডিসিন ডিপার্টমেন্ট, পিডিয়াট্রিকস, নবজাতক বিভাগ, পিডিয়াট্রিক নিউরোলজি, অফথালমোলজি, নাক, কান, গলা, অবস্টেট্রিকস এবং গাইনিকোলজি, সার্জারি, হেপাটোবিলিয়ারি সার্জারি, লিথোট্রিপসি কক্ষ, অপারেশন থিয়েটার, এনেসথিওলজি, পেইন ক্লিনিক, ইনটেনসিভ কেয়ার ইউনিট এবং পোস্ট অপারেটিভ ওয়ার্ডের অবস্থান এই সি ব্লকে।</li>
            <li>আঠারো তলা ভবন নিয়ে এই ব্লক ডি'র অবস্থান; ভবনটি এখনো নির্মাণাধীন। জরুরি বিভাগ, ক্যাজুয়ালটি বিভাগ, কার্ডিয়াক ইমার্জেন্সী, অবস্টেট্রিক ও গাইনিকোলজি ইমার্জেন্সী, অর্থোপেডিকস ইমার্জেন্সী, কার্ডিওলজি, পিডিয়াট্রিক গ্যাস্ট্রোএন্টারলজি, হেপাটোলজি, অর্থোপেডিকস, সাইকিয়াট্রি, গ্যাস্ট্রোএন্টারলজি, হেমাটোলজি, মেডিসিন এবং অনকোলজি বিভাগের অবস্থান এই ব্লকে।</li>
            <li>এছাড়া এই বিশ্ববিদ্যালয় এবং বাংলাদেশ পরমাণু শক্তি কমিশনের যৌথ উদ্যোগে গড়ে তোলা ইনস্টিটিউট অব নিউক্লিয়ার মেডিসিনের অবস্থানও এই ব্লকে। কম্পিউটারাইজড আলট্রাসনোগ্রাফি, গামা ক্যামেরাসহ বিভিন্ন প্রযুক্তি ব্যবহার করে রোগ নির্ণয়ের ব্যবস্থা আছে এখানে।</li>
            <li>ক্যাজুয়ালটি ডিপার্টমেন্ট, মেডিসিন বহির্বিভাগ, সার্জারি, নিউরোসার্জারি,, গ্যাস্ট্রোএন্টারলজি, হেমাটোলজি, হেমাটোলজি, সাইকিয়াট্রি, পিডিয়াট্রিক সার্জারি এবং এবং হাসপাতালের ডিসপেনসারি আলাদা একটি কমপ্লেক্সে অবস্থিত।</li>
            <li>উপাচার্য হাসপাতালটির সিন্ডিকেট এবং একাডেমিক কাউন্সিলের চেয়ারম্যান এবং পুরো বিশ্ববিদ্যালয় এবং হাসপাতালের প্রধান নির্বাহী। বিশ্ববিদ্যালয় মঞ্জুরি কমিশন এবং সরকারের স্বাস্থ্য মন্ত্রণালয়ের মাধ্যমে বিশ্ববিদ্যালয়টি পরিচালিত হয়।</li>
          </ul>
          <br>
        
          <h3>খোলা-বন্ধ</h3>
          <p>শুক্রবার এবং সরকারী  ছুটির দিন ছাড়া সকাল আটটা থেকে দুপুর আড়াইটা পর্যন্ত প্রশাসনিক দপ্তর খোলা থাকে।</p><br>

          <h3>হাসপাতাল পরিচালক:</h3>
          <ul>
            <li>কক্ষ নম্বর # ১০৩,  ব্লক # সি</li>
            <li>ফোন: +৮৮-০২-৮৬২৬১৫২  </li>
            <li>ই-মেইল: majidbhuiyan@yahoo.com</li>
          </ul><br>

          <h3>বহির্বিভাগ:</h3>
          <ul>
            <li>সকাল আটটা থেকে বহির্বিভাগ কার্যক্রম শুরু হয়। সবগুলো বিভাগেরই আলাদা আলাদা বহির্বিভাগ আছে। রোগের ধরন বুঝে নির্দিষ্ট বিভাগের টিকেট কেটে সংশ্লিষ্ট চিকিৎসককে দেখাতে হয়। যেমন কারো মানসিক কোন সমস্যা আছে মনে হলে তিনি মানসিক রোগ বিভাগের টিকেট কাটতে পারেন। অবশ্য তিনি মেডিসিন বিভাগের টিকেটও কাটতে পারেন। সেক্ষেত্রে প্রয়োজন মনে করলে সংশ্লিষ্ট চিকিৎসকই প্রয়োজনীয় বিভাগে রেফার করেন।</li>
            <li>এ হাসপাতালই সব ধরনের পরীক্ষা করা হয়। রোগীকে পরীক্ষার জন্য বাইরে যেতে হয় না। সকাল আটটা থেকে হাসপাতালের কার্যক্রম শুরু হয়।</li>
            <li>হাসপাতালটিতে আলাদা একটি কেবিন ব্লক রয়েছে। মোটামুটি সুসজ্জিত কেবিন রয়েছে এই ভবনটিতে। সম্প্রতি ভবনটিতে কেবিনের সংখ্যা বাড়ানো হয়েছে।</li>
            <li>হাসপাতালের পশ্চিমপ্রান্তে একটি মসজিদ রয়েছে। আর মুসলিম রীতি মেনে লাশের গোসলের জন্য আলাদা একটি লাশঘর আছে।</li>
            <li>অভ্যন্তরীণ রোগীদের মূলত সি ব্লকে রাখা হয়। এখানে বিভিন্ন বিভাগের আলাদা আলাদা ওয়ার্ড আছে।</li>
          </ul>

          <h3>ফ্যাকাল্টি ও বিভাগ</h3>
          <ul>
            <li>ফ্যাকাল্টি অব মেডিসিন </li><br>
            <li>ডিপার্টমেন্ট অব কার্ডিওলজি</li>
            <li>ডিপার্টমেন্ট অব ডার্মেটোলজি এন্ড ভেনিরিওলজি</li>
            <li>ডিপার্টমেন্ট অব হেমাটোলজি</li>
            <li>ডিপার্টমেন্ট অব হেপাটোলজি</li>
            <li>ডিপার্টমেন্ট অব মেডিসিন</li>
            <li>ডিপার্টমেন্ট অব নিওন্যাটোলজি</li>
            <li>ডিপার্টমেন্ট অব নেফ্রোলজি</li>
            <li>ডিপার্টমেন্ট অব নিউরোলজি</li>
            <li>ডিপার্টমেন্ট অব অনকোলজি</li>
            <li>ডিপার্টমেন্ট অব পিডিয়াট্রিকস</li>
            <li>ডিপার্টমেন্ট অব পিডিয়াট্রিক গ্যাস্ট্রোএন্টারলজি</li>
            <li>ডিপার্টমেন্ট অব পিডিয়াট্রিক হেমাটোলজি এন্ড অনকোলজি</li>
            <li>ডিপার্টমেন্ট অব পিডিয়াট্রিক নেফ্রোলজি</li>
            <li>ডিপার্টমেন্ট অব ফিজিক্যাল মেডিসিন</li>
            <li>ডিপার্টমেন্ট অবসাইকিয়াট্রি</li>
            <li>ডিপার্টমেন্ট অব ট্রান্সফিউশন মেডিসিন</li><br>
            <li>ফ্যাকাল্টি অব সার্জারি</li><br>
            <li>ডিপার্টমেন্ট অব এনেসথিওলজি</li>
            <li>ডিপার্টমেন্ট অব কার্ডিয়াক সার্জারি</li>
            <li>ডিপার্টমেন্ট অব নিউরো সার্জারি</li>
            <li>ডিপার্টমেন্ট অব অবস্টেট্রিকস এন্ড গাইনিকোলজি</li>
            <li>ডিপার্টমেন্ট অব অফথালমোলজি</li>
            <li>ডিপার্টমেন্ট অব অর্থোপেডিক সার্জারি</li>
            <li>ডিপার্টমেন্ট অব অটোলারিনগলজি</li>
            <li>ডিপার্টমেন্ট অব পিডিয়াট্রিক সার্জারি</li>
            <li>ডিপার্টমেন্ট অব রেডিওলজি এন্ড ইমেজিং</li>
            <li>ডিপার্টমেন্ট অব সার্জারি</li>
            <li>ডিপার্টমেন্ট অব ইউরোলজি</li>
            <li>ডিপার্টমেন্ট অব ভাস্কুলার সার্জারি</li><br>
            <li>ফ্যাকাল্টি অব বেসিক মেডিকেল সায়েন্স</li><br>
            <li>ডিপার্টমেন্ট অব এনাটমি</li>
            <li>ডিপার্টমেন্ট অব বায়োকেমিস্ট্রি</li>
            <li>ডিপার্টমেন্ট অব ক্লিনিক্যাল প্যাথলজি</li>
            <li>ডিপার্টমেন্ট অব মাইক্রোবায়োলজি</li>
            <li>ডিপার্টমেন্ট অব প্যাথলজি</li>
            <li>ডিপার্টমেন্ট অব ফার্মাকোলজি</li>
            <li>ডিপার্টমেন্ট অব ফিজিওলজি</li>
            <li>ডিপার্টমেন্ট অব পাবলিক হেলথ এন্ড ইনফরমেটিকস</li>
            <li>ডিপার্টমেন্ট অব ভাইরোলজি</li><br>
            <li>ফ্যাকাল্টি অব ডেন্টিস্ট্রি</li><br>
            <li>ডিপার্টমেন্ট অব কনজারভেটিভ ডেন্টিস্ট্রি এন্ড এন্ডোডনটিকস</li>
            <li>ডিপার্টমেন্ট অব ওরাল এন্ড ম্যাক্সিলোফেসিয়াল সার্জারি</li>
            <li>ডিপার্টমেন্ট অব অর্থোডনটিকস</li>
            <li>ডিপার্টমেন্ট অব প্রস্থডনটিকস</li><br>
            <li>ফ্যাকাল্টি অব নার্সিং</li><br>
            <li>ডিপার্টমেন্ট অব গ্রাজুয়েট নার্সিং</li><br>
            <li>ফ্যাকাল্টি অব মেডিকেল টেকনোলজি</li>
          </ul><br>

          <h3>রোগীর সেবা সমূহঃ</h3>
          <ul>
            <li>ফ্রি চিকিৎসা সুযোগ</li>
            <li>সিসিইউ</li>
            <li>ডায়ালিসিস</li>
            <li>ই.সি.জি</li>
            <li>দুর্ঘটনাকবলিত রোগীর জরুরী ভর্তি</li>
            <li>জরুরী বিভাগ</li>
            <li>ফ্রি বেড</li>
            <li>আইসিইউ</li>
            <li>অপারেশন থিয়েটার</li>
            <li>নিজস্ব ব্লাড ব্যাংক</li>
            <li>নিজস্ব ডায়াগনস্টিক ল্যাব</li>
            <li>অক্সিজেন সাপ্লাই</li>
            <li>ফিজিওথেরাপি</li>
            <li>আলট্রাসনগ্রাফি</li>
            <li>এক্স-রে</li>
            <li>এক্স-রে</li>
            <li>স্টাফদের জরুরী মেডিকেল টেনিং ব্যবস্থা</li>
            <li>টিকা</li>
            <li>পোষ্ট অপারেটিভ বেড</li>
            <li>ভেনটিলেশন</li>
            <li>ফার্মেসি</li>
            <li>এ্যাম্বুলেন্স ব্যবস্থা</li>
            <li>ক্যান্টিন/ক্যাফেটেরিয়া</li>
            <li>ওয়েটিং রুম</li>
            <li>ওয়েটিং রূমে টিভি এবং পত্রিকার ব্যবস্থা</li>
          </ul><br>

          <h3>বিবিধ</h3>
          <ul>
            <li>এই হাসপাতালটি সরকারী খরচে পরিচালিত হয়।</li>
            <li>এখানে ভিজিটের পরিমান খুবই কম।</li>
            <li>হাসপাতালটিতে গরীবদের জন্য বিশেষ সুবিধা বিদ্যমান।</li>
            <li>হাসপাতালটিতে মসজিদ থেকে শুরু করে প্রার্থনা করার সব কিছুই বিদ্যমান  আছে।</li>

          </ul><br>

        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">ঢাকা শিশু হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos5.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">“শিশু স্বাস্থ্য সেবা দেশের সর্বস্তরে পৌঁছাতে হবে যাতে কোন শিশুই এ থেকে বঞ্চিত না হয়” এই মূলমন্ত্রকে সামনে রেখে ১৯৬৮ সালে প্রতিষ্ঠিত হয় ঢাকা শিশু হাসপাতাল। প্রথমে ঢাকা শিশু হাসপাতালের  অবস্থান ছিল ধানমন্ডি ৩২ নম্বর সড়কে। পরবর্তীতে ১৯৭৬ সালে এটি বর্তমান অবস্থানে স্থানান্তরিত হয়। এই হাসপাতালটি একটি সরকারি হাসপাতাল।</p>
            </div>
            
          </div><br>
          <h3>অবস্থান</h3>
          <p>ঢাকা শেরে বাংলা নগরে শ্যামলী বাস স্ট্যান্ডের ২০–৩০ গজ পূর্ব দিকে শিশুমেলার পূর্বে এবং জাতীয় অর্থোপেডিক হাসপাতাল ও পূনর্বাসন কেন্দ্রের পশ্চিম পাশে এটি অবস্থিত। হাসপাতালের দুটি ভবন রয়েছে। </p>
          <h3>অনুসন্ধান ডেস্ক,অ্যাম্বুলেন্স</h3>
          <ul>
            <li>হাসপাতাল সম্পর্কে যাবতীয় তথ্য সরবরাহের জন্য এখানে একটি অনুসন্ধান ডেস্ক রয়েছে। মূল গেইট দিয়ে ঢুকে হাসপাতালের নিচতলায় পূর্ব দিকে গেলে অনুসন্ধান ডেস্কটি পাওয়া যাবে।</li>
            <li>ফোনঃ +৮৮-০২-৮১১৬০৬১-৬২, +৮৮-০২-৮১১৪৫৭১-৭২</li>
          
            <li>ওয়েব: www.dhakashishuhospital.org</li>
            <li>জরুরী প্রয়োজনে রোগীদের পরিবহন সুবিধা দিতে এই হাসপাতালে ৭টি অ্যাম্বুলেন্স রয়েছে। যোগাযোগ: ০১৯৩৮-০৮৯৭৮১ (বিল্লাল মিয়া), ৮১১৬০৬১-৬২, ৮১১৪৫৭১-৭২।</li>
          </ul>
              <br>


          <h3>রোগী ভর্তির তথ্য</h3>
          <p>জরুরী ভিত্তিতে রোগীকে এই হাসপাতালে ভর্তির জন্য প্রথমে জরুরী বিভাগে ৫০ টাকা মূল্যের টিকেট কেটে ডাক্তার দেখাতে হবে। এরপর ডাক্তার রোগী দেখে ভর্তির পরামর্শ দিলে রোগীকে হাসপাতালে ভর্তি করানো হবে। জরুরী বিভাগে দুপুর ২.৩০ টা থেকে সকাল ৮.০০ টা পর্যন্ত রোগী ভর্তি করানো যায়।</p>
          <br>
        
          <h3>বহি:বিভাগ</h3>
          <p>বহি:বিভাগে ডাক্তার দেখাতে হলে প্রথমে কাউন্টার থেকে ২০ টাকা মূল্যের টিকেট কাটতে হয়,পরবর্তীতে কাউন্টার ম্যানের নির্দেশনা অনুযায়ী ডাক্তারের কক্ষে যেতে হয়। সাধারণ জ্বর,সর্দি,কাশি,আমাশয়, ডাইরিয়াসহ শিশুদের যাবতীয় রোগের চিকিৎসা সেবা দেওয়া হয় ।</p><br>

          <h3>অপারেশন,অপারেশন চার্জ</h3>
          <p>শিশুদের যাবতীয় রোগের অপারেশন এখানে সম্পূর্ণ  হয়ে থাকে। রোগীর রোগের মাত্রা ও ডাক্তারের উপর নির্ভর করে অপারেশন চার্জ নির্ধারিত হয়।</p><br>

          <h3>কেবিন ও ওয়ার্ডের মোট সংখ্যা,ভাড়া</h3>
          <p>এটি একটি ২০০ শয্যার হাসপাতাল। এখানে মোট ১০টি কেবিন ও ১১টি ওয়ার্ড রয়েছে। ২ থেকে ৩ হাজার টাকার মধ্যে কেবিন ভাড়া পাওয়া যায়। ওয়ার্ড ভাড়া ২০০ টাকা থেকে ৪০০ টাকা পর্যন্ত। কেবিন ও ওয়ার্ড ভেদে ভাড়ার তারতম্য ঘটে। কেবিন বা ওয়ার্ডে সিট পাওয়ার জন্য অনুসন্ধান ডেস্কে যোগাযোগ করতে হয়। ডাক্তার রোগীকে ভর্তির পরামর্শ দিলে যেখানে সিট খালি থাকে সেখানে রোগী প্রেরণ করা হয়। জরুরী প্রয়োজনে সিট পাওয়া না গেলে হাসপাতালের ফ্লোরে রোগীকে রাখতে হয়।</p>
          <p>রোগীর সাথে দেখা করার জন্য দর্শনার্থীদের ১১০ টাকা দিয়ে হাসপাতাল থেকে দর্শনার্থী কার্ড সংগ্রহ করতে হয়। রোগীর সাথে দেখা করার পর হাসপাতালে কার্ডটি জমা দিলে ১০ টাকা কেটে রেখে বাকি ১০০ টাকা দর্শনার্থীকে ফেরত দেয়া হয়।</p><br>

          <h3>বিশেষজ্ঞ ডাক্তার,নার্স</h3>

          <p>বিশেষজ্ঞ ও এম.বি.বিএস ডাক্তার সহ মোট ১৫ জন স্থায়ী ডাক্তার রয়েছে এখানে। যারা ৫টি চেম্বারে বসে থাকেন। অসুস্থ শিশুদের যথাযথ পরিচর্যার নিয়োজিত আছেন ২৫০ জন প্রশিক্ষণপ্রাপ্ত ও ৫০ জন অপ্রশিক্ষণপ্রাপ্ত নার্স।</p>
          <h3>আর্থিকভাবে অসচ্ছল রোগীদের জন্য বিশেষ সুবিধা</h3>

          <p>আর্থিকভাবে অসচ্ছল গরীব রোগীদের জন্য এখানে বিনামূল্যে প্যাথলজিক্যাল টেস্টসমূহ করানোর সুযোগ রয়েছে। তাছাড়া হাসপাতাল কর্তৃপক্ষ দরিদ্র রোগীদের বিনামূল্যে ঔষধ, রক্ত ও বস্ত্র সরবরাহ করে থাকেন। কখনো কখনো রোগীদের যাতায়াত ভাড়া প্রদান করা হয়। এসকল সুবিধা সমূহ পেতে সমাজ কল্যাণ বিভাগে যোগাযোগ করতে হবে।</p>
          <br>

          <h3>ঔষধের দোকান, ব্লাড ব্যাংক</h3>
          <p>হাসপাতালের কাছাকাছি বেশ কিছু ঔষধের দোকান রয়েছে। যেগুলো মূল গেইটের কাছে ভেতরের দিকে হাতের ডানে অবস্থিত। এই দোকানগুলো ২৪ ঘন্টা খোলা থাকে। ২নং ভবনের দ্বিতীয় তলায় ২০৩ নম্বর রুমে হাসপাতালের নিজস্ব ব্লাড ব্যাংক অবস্থিত।</p><br>
          <h3>লাশঘর,পোস্টমর্টেম</h3>
          <p>এই হাসপাতালে আলাদা লাশ রাখার কক্ষ রয়েছে। হাসপাতালে কোন রোগীর মৃত্যু হলে রোগীর লাশ,লাশ রাখার ঘরে পাঠিয়ে দেয়া হয়। হাসপাতালের যাবতীয় পাওনা পরিশোধ করে মানি রিসিট দেখিয়ে লাশঘর থেকে লাশ গ্রহণ করতে হয়। এই হাসপাতালে পোস্টমর্টেমের ব্যবস্থা নেই।</p><br>
          <h3>গাড়ি পার্কিং,অগ্নি নির্বাপন ও অন্যান্য</h3>
          <p>হাসাপাতালের সামনে প্রচুর খালি জায়গা রয়েছে যেখানে প্রায় ৮০টি গাড়ি পার্কিং করা যায়। পার্কিং চার্জ গাড়ি/কার ২০ টাকা, মোটর সাইকেল ১০ টাকা। এই হাসপাতালে অভিযোগ কেন্দ্র নেই। রোগীদের কোন অভিযোগ থাকলে সরাসরি ডিরেক্টর রুমে গিয়ে মৌখিক বা লিখিতভাবে অভিযোগ জানাতে হয়। হাসপাতালের অভ্যন্তরে অগ্নি নির্বাপন ব্যবস্থা এবং নিরাপত্তার জন্য পর্যাপ্ত প্রশিক্ষণপ্রাপ্ত লোকবল রয়েছে। লিফট আছে ১টি যেটি গেইট দিয়ে ঢুকে ১০ গজ দক্ষিণ দিকে অবস্থিত।</p><br>

        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">বারডেম জেনারেল হাসপাতাল</h2>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6" >
              <img class="img-fluid" src="images/hos6.jpg">
            </div>
            <div class="col-sm-6 text-center">
              <br><br>
              <p style="text-align: justify;">দেশের অগনিত ডায়াবেটিস রোগীদের চিকিৎসার জন্য  বারডেম জেনারেল হাসপাতাল সম্পূর্ন বেসরকারী ভাবে ১৯৮৯ সালে আনুষ্ঠানিক ভাবে প্রতিষ্ঠা লাভ করে। বারডেম জেনারেল হাসপাতালে ডায়াবেটিস রোগীরা বিশেষ সেবা পেয়ে থাকেন।</p>
            </div>
            
          </div><br>
          <p><b>ঠিকানা ও যোগাযোগ</b></p>
          <ul>
            <li>১২২/ কাজী নজরুল ইসলাম এভিনিউ, শাহাবাগ, ঢাকা-১০০০।</li>
            <li>ফোন: +৮৮-০২-৮৬১৬৬৪১-৫০,  +৮৮-০২-৯৬৬১৫৫১-৬০</li>
            <li>ওয়েব: www.birdem-bd.org</li>
            <li>বঙ্গবন্ধু শেখ মুজিব মেডিকেল বিশ্ববিদ্যালয়ের অপরপ্রান্তে এই হাসপাতালটি অবস্থিত। </li>
          </ul><br>

          <p><b>হাসপাতালটির বর্ননা</b></p>
          <ul>
            <li>এই হাসপাতালটি বহুতল বিশিষ্ট তিনটি ভবনে বিভক্ত। উত্তর পার্শ্বের ভবনটি ১৬তলা, দক্ষিণ পার্শ্বের ভবনটি ৮ তলা  এবং  মাঝের ভবনটি ৫ তলা বিশিষ্ট। বারডেম জেনারেল হাসপাতালটির কয়েকটি ফটক ও প্রত্যেক ভবনে পর্যাপ্ত লিফট ব্যবস্থা রয়েছে।</li>
          </ul>
          <br>
          <p><b>চিকিৎসা সেবার ধরণ</b></p>
          <ul>
            <li>
              এই হাসপাতালটিতে আন্ত: বিভাগ ও বহির্বিভাগে রোগীদের সেবা প্রদান করা হয়ে থাকে। ডায়াবেটিস রোগ নির্ণয়ের জন্য মাঝের ভবনে গিয়ে টিকিট  ক্রয় করে মল-মূত্র পরীক্ষার জন্য টেষ্ট টিউব ও কোটা সংগ্রহ করে পাশাপাশি অবস্থিত একাধিক টয়লেটের যে কোন একটিতে প্রবেশ করে নমুনা সংগ্রহ করে নির্দিষ্ট স্থানে জমা দেয়ার পর নির্ধারিত সময়ে তা জেনে নিয়ে উপযুক্ত চিকিৎসার জন্য হাসপাতাল কর্তৃপক্ষ কর্তৃক হিষ্ট্রি বই ও আইডি কার্ডের মাধ্যমে পরবর্তী পদক্ষেপগুলো নিতে হয়।
            </li>
          </ul>
          <p>বিশেষজ্ঞ চিকিৎসকবৃন্দ</p>

          <p>এই হাসপাতালটিতে ৪৫ জন বিশেষজ্ঞ চিকিৎসক রয়েছে। চিকিৎসকগণ ১১টি রোগের সেবা দিয়ে থাকে। ডাক্তারদের চেম্বারগুলো দক্ষিন পার্শ্বের ভবনের ২য় তলায় অবস্থিত।</p>
          <br>
          <p>অন্যান্য</p>
          <ul>
            <li>এই হাসপাতালে প্রশিক্ষন প্রাপ্ত ৩০০ জন নার্স রয়েছে।</li>
            <li>এ হাসপাতালে ১০৩টি কেবিন এবং ওয়ার্ড ভিত্তিক ৭৪৭টি সিট আছে। ওয়ার্ডের সিট ভাড়া প্রতিদিন ৮৫০ টাকা এবং কেবিনের ভাড়া ১০০০ টাকা থেকে ১৫০০ টাকার মধ্যে।</li>
          </ul><br>

          <p>জটিল রোগের অপারেশন সুবিধা</p>
          <ul>
            <li>ওপেন হার্ট সার্জারী</li>
            <li>বাইপাস সার্জারী</li>
            <li>কিডনী ট্রান্সপ্লান্টটেশন</li>
            <li>বাল্ব রিপলেসমেন্ট</li>
            <li>ইউরটরী লিটোটমি</li>
            <li>গ্যাস্ট্রো স্ট্রুমি</li>
            <li>হেপাটোলপি</li>
            <li>জেনারেল সার্জারী</li>
            <li>ইউরোটোলজি</li>
            <li>ল্যাপারোকোলি</li>
          </ul><br>

          <p><b>এ্যাম্বুলেন্স সুবিধা</b></p>
          <ul>
            <li>
              এখানে এ্যাম্বুলেন্স আছে মোট ৯ টি। এ সেবা পেতে হলে প্রথমে জরুরী বিভাগে গিয়ে জানাতে হবে। এরপর রোগীর তদারককারী ডাক্তারের অনুমতিক্রমে শর্তসাপেক্ষে এ্যাম্বুলেন্স এর ব্যবস্থা করা হয়। যোগাযোগ- ৮৬১৬৬৪১।
            </li>
          </ul><br>

          
          <p><b>বিবিধ</b></p>
          <ul>
            <li>গাড়ী পাকিং এর ব্যবস্থা রয়েছে।</li>
            <li>অনুসন্ধান কক্ষ রয়েছে।</li>
            <li>অনুসন্ধান কক্ষ থেকে যে কোন ধরনের তথ্য পাওয়া যায়।</li>
            <li>রোগীদের জন্য পর্যাপ্ত ডাক্তার রয়েছে।</li>
          </ul>

          <br>

        </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- drr -->

<!-- footer -->

<footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-4">
        <h4>Contact</h4>
        <br>
        <p>House #48/5, Road # 5, Dakkhin Bishil, Mirpur-1, Dhaka-1216, Bangladesh </p>
        <p>Phone : +880 1754001091</p>
        <p>E-mail : hasibur140115@gmail.com</p>
      </div>
      <div class="col-sm-4">
        <h4>Our Social Link</h4>
        <br>
        <div class="icon-bar text-center" id="s-n" >
  <a class="active" href="#"><i class="fab fa-facebook"></i></a> 
  <a href="#"><i class="fab fa-google" ></i></a> 
  <a href="#"><i class="fab fa-twitter" ></i></a>
  <a href="#"><i class="fab fa-youtube" ></i></a>
</div>
      </div>
      <div class="col-sm-4">
        <h4>WE ARE </h4>
        <br>
        <img src="images/m1.jpg" class="rounded-circle" style="height: 120px; width: 120px;" >
      </div>
    </div><br>
  <div>
       <center><p style="font-size: 13px;color: white;">@Copyright By Hasibur Rahman </p></center>
  </div>
  </footer>

<!-- jquary in body -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</body>
</html>