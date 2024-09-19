<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFlex</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>

   
<script>
        $(document).ready(function(){
            $("#hamburger").click(function(){
                $("#slidedown").fadeIn(300);
            });
            $("#close").click(function(){
                $("#slidedown").fadeOut(300);
            });
        });
    </script>
    
    <div id="navpc">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>
        
        <ul>
            <li><a href="#intro">Home</a></li>
            <li><a href="#titullicourses">Courses</a></li>
            <li><a href="#coursetitle">About</a></li>
            <li><a href="#form"><button class="registerbutton">Register</button></a></li>
        </ul>
    </div>

    <div id="navmobile">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>

        <ion-icon name="menu-outline" id="hamburger"></ion-icon>
    </div>

    <div id="slidedown">
    <div id="navmobile">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>
        
        <ion-icon name="close-outline" id="close"></ion-icon>
    </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">About</a></li>
            <li><a href=""><button class="registerbutton">Register</button></a></li>
        </ul>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<div class="header"><h1>Welcome to EduFlex!</h1></div>

<p id="intro">
Welcome to our online learning platform, where you can dive into the fascinating worlds of math, physics, chemistry, and biology. Our website offers a comprehensive selection of online courses in these foundational scientific disciplines, designed to cater to learners of all levels, from beginners to advanced enthusiasts. Whether you're looking to build a solid understanding of mathematical concepts, explore the fundamental laws of physics, delve into the intricacies of chemical reactions, or unravel the mysteries of the living world, our courses provide engaging and interactive learning experiences.Through our online courses, you'll have the opportunity to learn from highly qualified instructors who are experts in their fields. They will guide you through the essential theories, principles, and applications of math, physics, chemistry, and biology, using a combination of clear explanations, practical examples, and interactive demonstrations. You'll have access to a wealth of resources, including videos, quizzes, and assignments, to reinforce your learning and test your understanding.<br><br>

Furthermore, our platform offers the flexibility and convenience of self-paced learning. You can access the course materials anytime, anywhere, allowing you to fit your studies around your personal commitments and obligations. Additionally, our vibrant learning community provides opportunities for collaboration and discussion with fellow students, enabling you to exchange ideas, seek support, and engage in thought-provoking conversations.<br><br>

Embark on a journey of discovery and exploration with our online courses in math, physics, chemistry, and biology. Expand your knowledge, sharpen your analytical skills, and gain a deeper appreciation for the wonders of the natural world. Whether you're pursuing academic excellence, preparing for exams, or simply nurturing your curiosity, our courses provide a solid foundation for your scientific endeavors. Join us today and unlock the secrets of these captivating disciplines, one course at a time.</p>


<div class="header" id="titullicourses"><p>Courses</p></div>
<p id="beforecard">Down below you can find the courses we provide:</p>


<div id="coursescard">

    <div class="subject" id="mathbck"><h3 class='titull'>Math</h3></div>
    <div class="subject" id="physicsbck"><h3 class="titull">Physics</h3></div>
    <div class="subject" id="chemistrybck"><h3 class='titull'>Chemistry</h3></div>
    <div class="subject" id="biobck"><h3 class='titull'>Biology</h3></div>
   
</div>

<div class="header"><h1 id="teachers">Professors</h1></div>
<p class="ptch">Math:Tarik Ajvazi</p>
<div class="teksti"><p class="profat">Prof.Dr Tarik Ajvazi is an exceptional math teacher who inspires his students with his passion and expertise in the subject. With his energetic and engaging teaching style, he effortlessly breaks down complex mathematical concepts into manageable steps, ensuring that each student grasps the fundamentals with ease. His classroom is an inclusive and nurturing environment, where students feel empowered to ask questions and explore their mathematical abilities. Through his unwavering commitment to fostering a love for math, Mr. Tarik Ajvazi is shaping the next generation of problem solvers and critical thinkers.</p></div>
<div class="fotodiv"><img src="jimmy woo.jpg" class="fotoprof"><img src="mathft.webp" class="fotoprof"></div>

<p class="ptch">Physics:Roberta Newton</p>
<p class="profat">Mr. Robert Newton is an exceptional physics teacher, whose enthusiasm for the subject is contagious. With his deep knowledge and understanding of the laws that govern the universe, he captivates his students, making complex concepts accessible and intriguing.  His commitment to nurturing critical thinking and problem-solving skills encourages students to explore beyond the textbooks and embrace the scientific method. With his patience, approachability, and genuine care for his students' success, Mr. Robert Newton inspires a new generation of aspiring scientists and engineers.</p>
<div class="fotodiv"><img src="roberta.jpg" class="fotoprof"><img src="phs.jpg" class="fotoprof"></div>

<p class="ptch">Chemistry:Alan Johnson</p>
<p class="profat">Mr. Alan Johnson is an exceptional chemistry teacher who brings the world of atoms and molecules to life in his classroom.  Mr. Johnson's teaching style combines interactive demonstrations, engaging experiments, and thought-provoking discussions, ensuring that his students grasp both the theoretical concepts and their practical applications. Through his innovative teaching methods and unwavering commitment, Mr. Alan Johnson inspires a love for chemistry and prepares his students for a future of scientific discovery.</p>
<div class="fotodiv"><img src="alan.webp" class="fotoprof"><img src="chemfoto.jpg" class="fotoprof"></div>

<p class="ptch">Biology:Miranda Mckenny</p>
<p class="profat">Ms. Miranda McKenny is a biology teacher who brings the wonders of life sciences to her students' fingertips. With her vast knowledge and infectious enthusiasm for the subject, she ignites a curiosity in her students, making biology come alive in the classroom. Ms. McKenny's teaching approach incorporates hands-on experiments, interactive activities, and captivating multimedia resources, ensuring that her students grasp the intricacies of living organisms with depth and clarity. </p>
<div class="fotodiv"><img src="miranda.jpg" class="fotoprof"><img src="biofoto.jpg" class="fotoprof"></div>

<div class="header" id="coursetitle"><p>About us</p></div>

<p class="profat">We are a company created in Prizren for the sole purpose of education.Nowadays students are having problems at school subjects, especially science.And we have found the answer to that:EduFlex.EduFlex is an online platform created from Malsor Arifi where students who are having problems at Math,Physics,Chemistry or Biology can get help.With our expert instructors and interactive learning materials, you can gain a solid foundation in these core subjects and excel in your academic pursuits.<br><br>

At EduFlex, we understand that each student has unique learning needs. That's why our courses are carefully crafted to provide a personalized learning experience. Whether you are struggling with a particular concept or seeking advanced knowledge in a specific area, our courses are designed to address your individual requirements. With our flexible learning platform, you can study at your own pace, giving you the freedom to grasp complex topics thoroughly.<br><br>

Our team of experienced educators is dedicated to your success. They bring a wealth of knowledge and expertise to the table, making your learning journey both insightful and enjoyable. Our instructors are passionate about their subjects and are committed to helping you develop a deep understanding of math, physics, chemistry, and biology. With their guidance and support, you can confidently tackle challenging topics and achieve your academic goals.<br><br>

Enroll in EduFlex today and embark on an enriching learning experience. Whether you are looking to improve your grades, prepare for exams, or enhance your understanding of these fundamental subjects, EduFlex is your trusted partner in education. Join us and unlock your full potential in math, physics, chemistry, and biology. </p>

<div class="header"><h1 id="register">Register now!</h1></div>

    <?php 
    include("eduregister.php");
    ?>

<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<?php include('eduerrors.php'); ?>
     <input type="text" class="input" name="firstName" placeholder="Name"><span><?php echo $empName?></span> <br>
     <input type="text" class="input" name="lastName" placeholder="Surname"><span><?php echo $empLastName?></span><br>
     <input type="password" class="input"  name="password" placeholder="Password"><span><?php echo $empPassword?></span><br>
     <input type="password" class="input" name="confirmPassword" placeholder="Confirm your password"><span><?php echo $empConfirmPassword?></span><br>
     <input type="email" class="input" name="email" placeholder="Write your email"><span><?php echo $empEmail?></span><br>
     <input type="date" class="input" name="birthday"><span><?php echo $empBirthday?></span><br>
    <div id="gender"> Gender:<input type="radio" class="gender" checked="checked" name="gender" <?php if (isset($gender) && $gender=="Femer") echo "checked";?> value="Femer">F<br>
			<input type="radio" class="gender" name="gender" <?php if (isset($gender) && $gender=="Mashkull") echo "checked";?> value="Mashkull">M</div><span><?php echo $empGender?></span><br><br>

    <select class="input" name="course">
        <option>Math</option>
        <option>Physics</option>
        <option>Biology</option>
        <option>Chemistry</option>
     </select><span><?php echo $empCourse?></span><br>
    <div id="buttons"> <input type="submit" name="login" class="registerbutton" value="Sign up"><br>
     <input type="reset" class="registerbutton" id="reset" value="Cancel">
    
        <a id="loginlink" href="loginpage.php">Already have an account? Log in!</a>
</div>
   
    </form> 


    <div id="footer">
    &copy;2023-<?php echo date("Y")  ?><p class="rightsreserved">All rights reserved</p>
    </div>


    
</body>
</html>






