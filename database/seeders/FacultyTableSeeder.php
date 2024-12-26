<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;


class FacultyTableSeeder extends Seeder
{
    
    public function run(): void
    {
        Faculty::create([
            'Name' => 'Dr. Muhammad Imran Malik',
            'ROLE'=>'admin',
            'Faculty_ID'=>'CPE-01-01',
            'Position' => 'Associate Professor',
            'Qualification' => 'Ph.D. (Information and Communication Engineering), Beijing Institute of Technology, Beijing, China (2013)',
            'Research Interests' => '',
            'Other_Information' => 'MANETS',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/36-imran.png',
            'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/36-doc101.pdf',
            'email' => 'imranmalik@bzu.edu.pk',
            'linkedin_url' => '',
            'facebook_url' => '',
            'twitter_url' => '',
            'google_scholar_url' => '',
            'researchgate_url' => '',
            'orcid_url' => '',
        ]);

        Faculty::create([
            'Name' => 'Dr. Muhammad Umar Chaudhry',
            'ROLE'=>'admin',
            'Faculty_ID'=>'CPE-01-02',
            'Position' => 'Assistant Professor',
            'Qualification' => 'Ph.D. in Computer Engineering, Sungkyunkwan University, Suwon, South Korea (2014-2019)',
            'Research Interests' => 'Machine Learning, Artificial Intelligence, Feature Selection, Monte Carlo Tree Search, Heterogeneous Information Networks, Recommender Systems',
            'Other_Information' => 'Director Student Affairs (DSA)',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/38-pic.jpg',
            'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/38-cv_dr._umar_bzu.pdf',
            'email' => 'umar.chaudhry@bzu.edu.pk',
            'linkedin_url' => 'https://www.linkedin.com/in/muhammad-umar-chaudhry',
            'facebook_url' => '',
            'twitter_url' => '',
            'google_scholar_url' => 'https://scholar.google.com/citations?user=2YN9DwIAAAAJ&hl=en',
            'researchgate_url' => 'https://www.researchgate.net/profile/Muhammad-Umar-Chaudhry-2',
            'orcid_url' => 'https://orcid.org/0000-0002-7287-2372',
        ]);

        Faculty::create([
            'Name' => 'Dr. Muhammad Waqar Ashraf',
            'ROLE'=>'admin',
            'Faculty_ID'=>'CPE-01-03',
            'Position' => 'Assistant Professor',
            'Qualification' => 'PhD',
            'Research Interests' => 'Computer Networks, Cloud Computing, Blockchain, Machine Learning, Internet of Things, Optical Networks',
            'Other_Information' => 'Incharge Examination',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/128-dr._waqar_ashraf_khan.jpeg',
            'cv_resume_url' => '',
            'email' => 'waqarashraf@bzu.edu.pk',
            'linkedin_url' => '',
            'facebook_url' => '',
            'twitter_url' => '',
            'google_scholar_url' => 'https://scholar.google.com/citations?user=U_ndxmcAAAAJ&hl=en&oi=ao',
            'researchgate_url' => '',
            'orcid_url' => '',
        ]);        
        

        Faculty::create([
            'Name' => 'Engr. Muhammad Wasiq',
            'ROLE'=>'faculty',
            'Faculty_ID'=>'CPE-01-04',
            'Position' => 'Assistant Professor',
            'Qualification' => 'Master of Engineering (Information Technology)',
            'Research Interests' => 'Operating Systems, Microprocessor Technologies, Embedded Systems',
            'Other_Information' => '',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/823-pic_wasiq_sb.jpg',
            'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/823-muhammad_wasiqs_cv.pdf',
            'email' => 'muhammad.wasiq@bzu.edu.pk',
            'linkedin_url' => '',
            'facebook_url' => '',
            'twitter_url' => '',
            'google_scholar_url' => '',
            'researchgate_url' => '',
            'orcid_url' => '',
        ]);

        Faculty::create([
            'Name' => 'Engr. Muhammad Mohsin Bhatti',
            'ROLE'=>'faculty',
            'Faculty_ID'=>'CPE-01-05',
            'Position' => 'Assistant Professor',
            'Qualification' => 'M.Sc. Telecommunication Engineering, MBA-HRM, LLB',
            'Research Interests' => 'Digital Transformation',
            'Other_Information' => 'Mind & Memory Trainer',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/51-mohsin_bhatti.png',
            'cv_resume_url' => '',
            'email' => 'mohsin.bhatti@bzu.edu.pk',
            'linkedin_url' => 'https://www.linkedin.com/in/mohsin-bhatti-6a013110',
            'facebook_url' => 'https://www.facebook.com/mohsin.bhatti.1042/',
            'twitter_url' => '',
            'google_scholar_url' => '',
            'researchgate_url' => '',
            'orcid_url' => '',
        ]);

       
        Faculty::create([
            'Name' => 'Dr. Yasir Aziz',
            'ROLE'=>'faculty',
            'Faculty_ID'=>'CPE-01-06',
            'Position' => 'Assistant Professor',
            'Qualification' => 'Ph.D. Electrical/Computer Engineering (IUB), M.S. Computer Engineering (U.E.T Lahore), B.Sc. Computer Systems Engineering (NFC-IET) Multan.',
            'Research Interests' => 'Computer Vision and Pattern Recognition',
            'Other_Information' => 'Software Engineer, IT Consultant, Algorithms Expert, Desktop & Web Application Developer',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/9-testing.jpg',
            'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/38-cv_dr._umar_bzu.pdf',
            'email' => 'engr.yasiraziz@bzu.edu.pk',
            'linkedin_url' => '',
            'facebook_url' => '',
            'twitter_url' => '',
            'google_scholar_url' => '',
            'researchgate_url' => '',
            'orcid_url' => '',
        ]);

        

        Faculty::create([
            'Name' => 'Dr. Mudassir Khalil',
            'ROLE'=>'faculty',
            'Faculty_ID'=>'CPE-01-07',
            'Position' => 'Assistant Professor',
            'Qualification' => 'Ph.D. in Computer Science & Engineering',
            'Research Interests' => 'Artificial Intelligence, Machine Learning, Deep Learning',
            'Other_Information' => 'OBE In-charge Computer Engineering Department',
            'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/37-photo.jpg',
            'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/37-cv.pdf',
            'email' => 'mudassir.Khalil@bzu.edu.pk',
            'linkedin_url' => 'https://linkedin.com/in/mudassirkhalil',
            'facebook_url' => 'https://facebook.com/mudassirkhalil',
            'twitter_url' => 'https://twitter.com/mudassirkhalil',
            'google_scholar_url' => 'https://scholar.google.com/citations?user=NvVcFWAAAAAJ&hl=en&oi=ao',
            'researchgate_url' => 'https://researchgate.net/profile/Mudassir_Khalil',
            'orcid_url' => 'https://orcid.org/0000-0002-1825-0097',
        
    ]);

   
    Faculty::create([
        'Name' => 'Engr. Dr.  Shahid Iqbal',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-08',
        'Position' => 'Assistant Professor',
        'Qualification' => 'PhD in Computer Systems Engineering, QUEST Nawab Shah. Masters of Engineering in Computer Systems, NED University of Engineering and Technology, Karachi, Pakistan.',
        'Research Interests' => 'Computer Communication and Networks, DBMS, WBSN, IoT, AI, ML',
        'Other_Information' => '',
        'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/55-shahid_iqbalw.png',
        'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/55-shahid_iqbal_cv_for_profile.pdf',
        'email' => 'shahid.iqbal@bzu.edu.pk',
        'linkedin_url' => 'https://www.linkedin.com/in/shahid-iqbal-5912732a9',
        'facebook_url' => 'https://www.facebook.com/profile.php?id=1836410114',
        'twitter_url' => '',
        'google_scholar_url' => 'https://scholar.google.com/citations?hl=en&user=LL8Y8O0AAAAJ',
        'researchgate_url' => '',
        'orcid_url' => 'https://orcid.org/0009-0004-3443-3629',
    ]);

    Faculty::create([
        'Name' => 'Engr. Mirza Khuram Baig',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-09',
        'Position' => 'Lecturer',
        'Qualification' => 'MS in Information and Communication Engineering, BIT, China (2013)',
        'Research Interests' => 'DIGITAL IMAGE PROCESSING AND ANALYSIS; COMPUTER VISION',
        'Other_Information' => '',
        'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/50-kuram_foto.jpeg',
        'cv_resume_url' => '',
        'email' => 'engr.khurambaig@bzu.edu.pk',
        'linkedin_url' => '',
        'facebook_url' => '',
        'twitter_url' => '',
        'google_scholar_url' => '',
        'researchgate_url' => '',
        'orcid_url' => '5',
    ]);

    Faculty::create([
        'Name' => 'Engr. Muhammad Baqer',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-10',
        'Position' => 'Lecturer',
        'Qualification' => 'M.Sc. Computer Systems Engineering.',
        'Research Interests' => 'Deep Learning, Artificial Neural Networks, Machine Learning, Pattern Recognition, Computer Vision, Cognitive Robotics, Artificial intelligence',
        'Other_Information' => 'FYDP Coordinator',
        'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/39-baqer.jpg',
        'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/39-cv_m.baqer.pdf',
        'email' => 'engr.baqer@bzu.edu.pk',
        'linkedin_url' => '',
        'facebook_url' => '',
        'twitter_url' => '',
        'google_scholar_url' => 'https://scholar.google.com/citations?hl=en&view_op=list_works&gmla=ALUCkoV2oszzTzSZ-D1wzb1NILQnCXJ7N_DRNMer_B5Cccl0ULdE9YS4nPRuICWdrk6mzJyUHpEKc1-Vt3e',
        'researchgate_url' => '',
        'orcid_url' => '4',
    ]);

    Faculty::create([
        'Name' => 'Mr. Muhammad Zahid Iqbal',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-11',
        'Position' => 'Lecturer',
        'Qualification' => 'M.Sc. Engineering (Computer Systems)',
        'Research Interests' => 'AI',
        'Other_Information' => '',
        'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/52-img_20220513_084123.jpg',
        'cv_resume_url' => 'https://profiles.bzu.edu.pk/uploads/pdf/52-zahid_cv_bzu.pdf',
        'email' => 'mzahidiqbal@bzu.edu.pk',
        'linkedin_url' => 'http://www.linkedin.com/in/muhammad-zahid-iqbal-28',
        'facebook_url' => '',
        'twitter_url' => '',
        'google_scholar_url' => '',
        'researchgate_url' => '',
        'orcid_url' => '',
    ]);

    Faculty::create([
        'Name' => 'Mr. Usman Humayun',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-12',
        'Position' => 'Lecturer',
        'Qualification' => 'M.Sc. Computer Systems Engineering (PhD from UTM Malaysia in progress)',
        'Research Interests' => 'Computer Networks and Architecture',
        'Other_Information' => '',
        'picture_url' => 'https://profiles.bzu.edu.pk/uploads/images/54-usman_humayun.jpg',
        'cv_resume_url' => '',
        'email' => 'usmanhumayun@bzu.edu.pk',
        'linkedin_url' => '',
        'facebook_url' => '',
        'twitter_url' => '',
        'google_scholar_url' => 'https://scholar.google.com/citations?user=EzdXbWMAAAAJ&hl=en&oi=ao',
        'researchgate_url' => '',
        'orcid_url' => 'https://orcid.org/0000-0001-9254-5961',
    ]);
   
    Faculty::create([
        'Name' => 'Mr. Yasir Anwar',
        'ROLE'=>'faculty',
        'Faculty_ID'=>'CPE-01-13',
        'Position' => 'Assistant Professor',
        'Qualification' => '',
        'Research Interests' => '',
        'Other_Information' => '',
        'picture_url' => '',
        'cv_resume_url' => '',
        'email' => 'chyasiranwar@bzu.edu.pk',
        'linkedin_url' => '',
        'facebook_url' => '',
        'twitter_url' => '',
        'google_scholar_url' => '',
        'researchgate_url' => '',
        'orcid_url' => '',
    ]);   

    
    }
}
