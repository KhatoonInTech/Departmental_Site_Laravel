<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'chairman-message',
            'Title'=>"Chairman's Message", 
            'Body'=>"Welcome to the Department of Computer Engineering at Bahauddin Zakariya University.
                        As the chairman, I am proud to lead a team dedicated to providing a quality education
                        and fostering innovation in the field of computer engineering. Our curriculum is designed
                        to equip students with the skills and knowledge necessary to excel in today's rapidly
                        evolving technological landscape.
                       
                        We are committed to nurturing talent and encouraging research, collaboration, and
                        community engagement. I invite you to explore our programs, participate in our events,
                        and join us in our mission to shape the future of technology.
                   ",
            'Link'=>"",
            'Link_text'=>'',
            'picture_url'=>"https://profiles.bzu.edu.pk/uploads/images/36-imran.png",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'dsa-message',
            'Title'=>"Departmental Student Advisor's Message", 
            'Body'=>"Welcome to the Department of Computer Engineering at Bahauddin Zakariya University.
                        As the DSA, I am proud to direct dedicated students to foster innovation in the field of computer
                        engineering. Our curriculum is designed
                        to equip students with the skills and knowledge necessary to excel in today's rapidly
                        evolving technological landscape.
                        <br><br>
                        We are committed to nurturing talent and encouraging research, collaboration, and
                        community engagement. I invite you to explore our programs, participate in our events,
                        and join us in our mission to shape the future of technology.
                  
                  ",
            'Link'=>"",
            'Link_text'=>'',
            'picture_url'=>"https://profiles.bzu.edu.pk/uploads/images/38-pic.jpg",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'events',
            'Title'=>"20 Years of Excellence", 
            'Body'=>"This year we celebrated our 20 years of excellence along with HEC Level 2
                                accredition with pride.",
            'Link'=>"https://www.facebook.com/share/p/1EQLebpRNe/",
            'Link_text'=>'',
            'picture_url'=>"images/20yrs.jpeg",
    
        ]);
        Content::create([
            'Page'=>'Welcome',
            'Section'=>'events',
            'Title'=>"Bone Fire 2023", 
            'Body'=>"<br>We continued the legacy of organizing the warm-most Bone Fire in the
                                chilling cold.<br><br>",
            'Link'=>"https://www.facebook.com/share/p/15KkQpvmJk/",
            'Link_text'=>'',
            'picture_url'=>"images/bonefire.jpeg",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'events',
            'Title'=>"Sports Galla 2024", 
            'Body'=>"<br>Our brilliant students performed the best in the inter-departmental
                                Sports Galla 2024.",
            'Link'=>"https://www.facebook.com/share/p/18FFXEqoLk/",
            'Link_text'=>'',
            'picture_url'=>"images/SportsGala.jpeg",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'news',
            'Title'=>"HEC issued NOC for<br> MSc. Computer Engineering", 
            'Body'=>"HEC has granted NOC for launching of MSc. Computer Engineering program in
                                the Department of Computer Engineering at BZU, Multan w.e.f Fall 2024.",
            'Link'=>"https://www.facebook.com/share/p/1EtQpP2zHR/",
            'Link_text'=>'',
            'picture_url'=>"images/noc.jpeg",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'news',
            'Title'=>"HEC accredits Department of <br>Computer Engineering, <br>BZU Multan
                                with Level 2", 
            'Body'=>"<br>HEC has granted the Level 2 Accredition to the Department of Computer
                                Engineering at Bahauddin Zakariya University, Multan.<br> This adds value to our degree that
                                is also accredited by Washginton DC, the United States of America.<br><br> ",
            'Link'=>"https://www.facebook.com/share/p/1KmxessJW9/",
            'Link_text'=>'',
            'picture_url'=>"images/acredition.jpg",
    
        ]);

        Content::create([
            'Page'=>'Welcome',
            'Section'=>'news',
            'Title'=>"Plantation Drive:<br>Grow A Tree", 
            'Body'=>"Our passionate and youthful minds drove a Departmental Campaign for
            Plantation and planted trees with their own donations.<br>Our Students showed remarkable
            management and leadership skill throught the campaign. ",
            'Link'=>"https://www.facebook.com/share/p/1XFYQaLrCq/",
            'Link_text'=>'',
            'picture_url'=>"images/plantation.jpeg",
    
        ]);

        Content::create([
            'Page' => 'about-cpe',
            'Section' => 'introduction',
            'Title' => "Our Journey",
            'Body' => "Established in 2004 under the Faculty of Engineering and Technology, the Department of Computer
                       Engineering at Bahauddin Zakariya University, Multan, has been at the forefront of technological
                       education in Pakistan.<br>
                       Our programs are accredited by the <a href=\"https://www.pec.org.pk/\" target=\"_blank\">Pakistan
                       Engineering Council (PEC)</a>, ensuring world-class education standards.",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'about-cpe',
            'Section' => 'achievements',
            'Title' => "<b>The Digital Revolution</b>",
            'Body' => "<br>In this modern era, we've witnessed rapid developments in Computer Engineering, both in hardware and
                       software. From home robotics to advanced operating systems, microprocessors, and supercomputers with
                       massive computational capabilities, our field is ever-evolving.",
            'Link' => "#",
            'Link_text'=>'Explore Our Labs',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'about-cpe',
            'Section' => 'impact',
            'Title' => "<b>Our Impact</b>",
            'Body' => "<br>Computer Engineers are the architects behind the technology we use daily. From personal computers
                       and smartphones to robotics, we're responsible for designing and developing tools that enhance
                       our lives and productivity.<br>",
            'Link' => "/#alumi",
            'Link_text'=>'Meet Our Alumni',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'about-cpe',
            'Section' => 'programs',
            'Title' => "<b>Our Programs</b>",
            'Body' => "<ul><br>
                            <li>B.Sc. in Computer Engineering</li>
                            <li>M.Sc. in Computer Engineering (MS Graduate Program)</li>
                            <li>Ph.D. in Computer Engineering (Coming Soon)</li>
                       </ul>",
            'Link' => "/Programs",
            'Link_text'=>'Apply Now',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'about-cpe',
            'Section' => 'facilities',
            'Title' => "<b>Our Facilities</b>",
            'Body' => "<br>We provide state-of-the-art facilities to our students:
                       <ul>
                            <li>Multimedia-equipped classrooms</li>
                            <li>Campus-wide WiFi</li>
                            <li>Well-equipped Computer laboratories</li>
                       </ul>",
            'Link' => "http://bit.ly/3Bz5xt5",
            'Link_text'=>'Virtual Tour',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'history',
            'Title' => "Our History",
            'Body' => "<p>Multan has always remained a centre of excellence in education. Hazrat Bahauddin Zakariya (1172 - 1262 A.D.), a Muslim religious scholar and saint, established a school of higher learning in theology in Multan; where scholars from all over the world came for studies and research.</p>
                       <p>The University of Multan was established in 1975 by an Act of the Punjab Legislative Assembly. To pay homage to the Great Saint, the name was changed from University of Multan to Bahauddin Zakariya University in 1979.</p>",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'objectives',
            'Title' => "<b>Our Objectives</b>",
            'Body' => "<br><p>The main objective of the University is to provide facilities of higher education and research to the population of the Southern region of the Punjab.</p>
                       <p>The University fulfils three functions: teaching, affiliation and examination.</p>",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'goals',
            'Title' => "<b>Our Goals</b>",
            'Body' => "<br><p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>
                       <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'vision',
            'Title' => "<b>Our Vision</b>",
            'Body' => "<br><p>Bahauddin Zakariya University, Multan as flagship Institution of the South Punjab imparts informed education at all levels of Undergraduate to PhD by diverse world-views and paradigms, grounded in diverse traditions and indigenous culture and heritage.</p>
                       <p>Make their Graduates leading luminaries with professional approach to preserve, disseminate and execute knowledge.</p>",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'mission',
            'Title' => "<b>Our Mission</b>",
            'Body' => "<p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>
                       <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>",
            'Link' => "",
            'Link_text'=>'',
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'AboutUni',
            'Section' => 'vc_message',
            'Title' => "Vice Chancellor's Message",
            'Body' => "<p>My dear students,</p>
                       <p>I am fully convinced that you are the future architects of a prosperous Pakistan. If you want a thriving Pakistan then it has to be a knowledge-based Pakistan. You therefore enter the University to seek knowledge and leave to disseminate knowledge. In today's world high expectations and demands are placed on the centres of higher education. The 21st century calls for new approaches to learning and innovative thinking. The acquisition of specific knowledge not just about the discipline that they belong to but also about the environment, health and citizenship will hone their ethical values and attitudes.</p>
                       <p>In our rapidly changing and interdependent world, the universities not only have to ensure that students acquire solid skills in basic subjects, but also that they become responsible local and global citizens, at ease with new technologies and able to make informed decisions about local and global challenges. Going global is the recipe to international peace, harmony and prosperity.</p>
                       <p>Furthermore, remember one thing; education and all its forms crown those who nurture her. Character building is an important aspect of education. It is our social capital. Strength of character includes faith, discipline, tolerance, patience, sharing, caring and compassion. Development of these qualities in our institutions will help us reduce trust deficit and intolerance which prevails in our society today.</p>
                       <p>Let us therefore, work together to build knowledge-based prosperous Pakistan.</p>",
            'Link' => "mailto:vc@bzu.edu.pk",
            'Link_text'=>'Contact VC',
            'picture_url' => "{{ asset('images/vc.png') }}",
        ]);

        Content::create([
            'Page' => 'Programs',
            'Section' => 'bsc_computer_engineering',
            'Title' => "B.Sc. Computer Engineering",
            'Body' => "<p class='mb-2 text-center'>Undergraduate Program</p>
                       <h3 class='text-info'>Eligibility:</h3>
                       <p>
                           An applicant for admission to any of the B.Sc. Engineering Degree Program offered by the University must fulfill the following requirements:<br><br>
                           a) He should have obtained at least <b>60% marks</b> in the examination on the basis of which he seeks admission.<br>
                           Marks for Hafiz-e-Quran and entry test where applicable shall be added only for determination of merit.<br><br>
                           b) He should be a bonafide resident of the area from where he seeks admission.<br><br>
                           c) He should meet standards of physique and eyesight laid down in the medical certificate.<br><br>
                           d) He must have appeared in the Entry Test for Session 2022 arranged by the University of Engineering & Technology Lahore, Pakistan or BZU Test for Session 2023.
                       </p><br>
                       <h3 class='text-info'>Merit Determination:</h3>
                      <br> <p>
                           The comparative merit of applicants will be determined on the basis of adjusted admission marks obtained by them in the above examinations.<br><br>
                           A) For applicant with H.S.S.C. (Pre Engineering Part-1) as the highest qualification:<br>
                           i) H.S.S.C. (Pre Engineering Part-I) or equivalent including Hifz-e-Quran marks. 70%<br>
                           ii) Entry Test marks 30%<br><br>
                           B) For applicants with B.Sc. as the highest qualification:<br>
                           i) B.Sc. Marks 35%<br>
                           ii) H.S.S.C. or equivalent exam including Hifz-e-Quran marks. 35%<br>
                           iii) Entry Test Marks 30%<br><br>
                           C) For Applicants having Diploma of Associate Engineer as the Highest Qualification:<br>
                           i) Diploma of Associate Engineer including Hifz-e-Quran marks 70%<br>
                           ii) Entry Test Marks 30%<br><br>
                           Criteria may be changed as per approval from the online academic committee BZU or further guidelines provided by Honourable Court or PEC on a later stage.
                       </p>",
            'Link' => "#",
            'Link_text' => "Apply Now",
            'picture_url' => "",
        ]);
        
        Content::create([
            'Page' => 'Programs',
            'Section' => 'msc_computer_engineering',
            'Title' => "M.Sc. Computer Engineering",
            'Body' => "<p class='mb-2 text-center'>Graduate (MS) Program</p>
                       <h3 class='text-info'>Eligibility:</h3>
                       <p>
                           1. Four years BS/BE/BSc Degree in Computer Engineering, Software Engineering, Electronics Engineering, Computer Systems Engineering, Telecommunication Engineering and Electrical Engineering with specialization in Computer/Electronics.<br><br>
                           2. The applicant should have obtained at least 60% marks under Annual/Term system or CGPA 2.50 on the scale of 4.00 or equivalent marks in relevant undergraduate degree on the basis of which he/she seeks admission.<br><br>
                           3. The applicant should have secured at least 50% marks in an Entry Test conducted by the department or GAT general.
                       </p><br>
                       <h3 class='text-info'>Merit Determination:</h3>
                       <p><br>
                           Admissions for M.Sc. Computer Engineering will be carried out as per the university policy.
                       </p>",
            'Link' => "#",
            'Link_text' => "Apply Now",
            'picture_url' => "",
        ]);
        
        
    }
}
