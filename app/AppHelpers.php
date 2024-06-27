<?php
use Illuminate\Support\Facades\Auth;


// Get user's id
if (!function_exists('getCurrentUser')) {
    function getCurrentUser()
    {
     $userId = Auth::id();
     
     return $userId;
    }
}


// Upload img 
if (!function_exists('uploadImg')){
    function uploadImg($location)
    {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
        $img->save($location.$name_gen);
        $save_url = $location.$name_gen;

        return $save_url;
    }
}

// Extract initials from user's name
if (!function_exists('getUserInitial')) {
    function getUserInitial()
    {
     $user = auth()->user();
   if ($user) {  
     $name = $user->name;
    $initials = [];

        $nameParts = explode(' ', trim($name));
        $firstName = array_shift($nameParts);
        $lastName = array_pop($nameParts);
        $initials[$name] = (
            mb_substr($firstName,0,1) .
            mb_substr($lastName,0,1)
        );

     $initials = implode('', $initials);
     return $initials;
        } else {
            return redirect('login');
        }
    }
}

// Get user's name
if (!function_exists('getUserName')) {
    function getUserName()
    {
     $user = auth()->user();
   if ($user) {  
     $name = $user->name;
     return $name;
        } else {
            return redirect('login');
        }
    }
}

// Get user's firstname
if (!function_exists('getUserFisrtName')) {
    function getUserFisrtName()
    {
     $user = auth()->user();
     $name = $user->name;
     $nameParts = explode(" ", $name);
     $firstName = $nameParts[0];
     return $firstName;
    }
}
// Get slides 
// if (!function_exists('getSlides')) {
//     function getSlides()
//     {
//      $slides = App\Models\HeroSection::all()->sortBy('order');
     
//      return $slides; 
//     }
// }
// Get Hero Heading 
if (!function_exists('getHeroSection')) {
    function getHeroSection()
    {
     $heroSection = App\Models\HeroSection::first();
     
     return $heroSection;
    }
 }
// Get Inner Hero 
if (!function_exists('getInnerHero')) {
    function getInnerHero()
    {
     $innerHero = App\Models\InnerHero::all();
     
     return $innerHero;
    }
 }
// Get About summary
if (!function_exists('getAboutSummary')) {
    function getAboutSummary()
    {
     $about_sum = App\Models\AboutSummary::all();
     
     return $about_sum;
    }
}
// Get Services
if (!function_exists('getServices')) {
    function getServices()
    {
     $services = App\Models\Service::all();
     
     return $services;
    }
}
// Get Stats
if (!function_exists('getStats')) {
    function getStats()
    {
     $stats = App\Models\StatSection::all();
     
     return $stats;
    }
}
// Get Services with project
if (!function_exists('getServicesProj')) {
    function getServicesProj()
    {
     $services = App\Models\Service::withProjects()->orderBy('order')->get();
     
     return $services;
    }
}
// Get Team Intro
if (!function_exists('getTeamIntro')) {
    function getTeamIntro()
    {
     $teamIntro = App\Models\TeamIntro::all();
     
     return $teamIntro;
    }
}
// Get Team Members
if (!function_exists('getMembers')) {
    function getMembers()
    {
     $members = App\Models\TeamMember::all();
     
     return $members;
    }
}
// Get Processes
if (!function_exists('getProcesses')) {
    function getProcesses()
    {
     $processes = App\Models\Process::all();
     
     return $processes;
    }
}
// Get Values
if (!function_exists('getValues')) {
    function getValues()
    {
     $members = App\Models\Values::all();
     
     return $members;
    }
}
// Get Projects
if (!function_exists('getProjects')) {
    function getProjects()
    {
     $projects = App\Models\Project::all();
     
     return $projects;
    }
}
// Get Testimonials
if (!function_exists('getTestimonials')) {
    function getTestimonials()
    {
     $testimonials = App\Models\Testimonial::all();
     
     return $testimonials;
    }
}
// Get Clients
if (!function_exists('getClients')) {
    function getClients()
    {
     $clients = App\Models\Client::all();
     
     return $clients;
    }
}
// Get Stats
if (!function_exists('getStats')) {
    function getStats()
    {
     $stats = App\Models\StatSection::all();
     
     return $stats;
    }
}
// Get Features
if (!function_exists('getFeatures')) {
    function getFeatures()
    {
     $features = App\Models\Feature::all();
     
     return $features;
    }
}
// Get Contact
if (!function_exists('getContact')) {
    function getContact()
    {
     $contact = App\Models\Contact::all();
     
     return $contact;
    }
}
// Get Social Media
if (!function_exists('getSmedia')) {
    function getSmedia()
    {
     $smedia = App\Models\SocialMedia::all();
     
     return $smedia;
    }
}