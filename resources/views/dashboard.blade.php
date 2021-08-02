@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        :root {
            --main-color: #013676;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }

        .text-blue-navy{
            color: #013676;
        }

        .bg-blue-navy{
            background-color: #013676;
        }

        button.bg-blue-navy:hover{
            color: #013676;
        }

    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <div class="-mt-16 -mx-8 mb-16">
            <div class="container mx-auto my-5 p-5">
               <div class="md:flex no-wrap md:-mx-2 ">
                   <!-- Left Side -->
                   <div class="w-full md:w-3/12 md:mx-2">
                       <!-- Profile Card -->
                       <div class="bg-white p-3 border-t-4" style="border-color: #013676">
                           <div class="image overflow-hidden">
                            @if (Auth::user()->student->gender == 'female')
                            <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->student->avatar . '') }}" class="h-auto w-full mx-auto" style="height:200px;width:200px" onerror="this.src='uploads/avatars/avatar2.png';" class="profile_image2"width="110" height="110" alt="">
                            @else
                            <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->student->avatar . '') }}" class="h-auto w-full mx-auto" style="height:200px;width:200px" onerror="this.src='uploads/avatars/avatar.jpeg';" class="profile_image2"width="110" height="110" alt="">
                            @endif
                           </div>
                           <h1 class="text-blue-navy font-bold text-xl text-center leading-8 my-1">{{ Auth::user()->name }}</h1>
                       </div>
                       <!-- End of profile card -->
                       <div class="my-4"></div>
                   </div>
                   <!-- Right Side -->
                   <div class="w-full xl:w-60 md:w-9/12 mx-2 h-64 border-t-4" style="border-color: #013676">
                       <!-- Profile tab -->
                       <!-- About Section -->
                       <div class="bg-white p-3 shadow-sm rounded-sm">
                            <?php
                                $names = explode(",", Auth::user()->name);
                                $surname = $names[0];
                                $other = $names[1];
                            ?>
                           <div class="text-gray-700">
                               <div class="grid md:grid-cols-2 text-md pr-12">
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Surname:</div>
                                       <div class="px-4 py-2">{{ $surname }}</div>
                                   </div>
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Other Names:</div>
                                       <div class="px-4 py-2">{{ $other}}</div>
                                   </div>
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Admission Number:</div>
                                       <div class="px-4 py-2">{{ Auth::user()->student->admission_no }}</div>
                                   </div>
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Email Address</div>
                                       <div class="px-4 py-2">{{ Auth::user()->email }}</div>
                                   </div>
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Date Of Birth</div>
                                       <div class="px-4 py-2">{{ Auth::user()->student->dob }}</div>
                                   </div>
                                   <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Mobile Number:</div>
                                       <div class="px-4 py-2">{{ Auth::user()->student->phone }}</div>
                                   </div>
                               </div>
                           </div>
                           <a href="{{route('account.profile')}}"
                               class="block w-full text-white text-center bg-blue-navy text-md font-semibold rounded-lg hover:bg-white hover:text-blue-navy focus:outline-none focus:shadow-outline focus:bg-white focus:text-blue-navy hover:shadow-xs p-2 my-4" style="text-decoration: none">Show Full Profile</a>
                       </div>
                       <!-- End of about section -->

                       <div class="my-4"></div>

                       <!-- Education -->
                       <div class="bg-white text-md shadow-sm rounded-sm overflow-x-auto p-2">

                           <div class="grid {{count($loaned_items) == 0 ? 'grid-rows-2' : 'grid-rows-3'}}">
                               <div>
                                   <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                       <span clas="text-gray-500">
                                           <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                               stroke="currentColor">
                                               <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                               <path fill="#fff"
                                                   d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                   d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                           </svg>
                                       </span>
                                       <span class="tracking-wide">Academic Programmes</span>
                                   </div>
                                   <table class="min-w-full">
                                    <thead>
                                      <tr>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Programmes</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Status</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Intake</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;" colspan="2">Coursework & Attendance</th>
                                      </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                      <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                          <td class="td text-sm leading-5 text-gray-900">Informatics and Computer Science</td>
                                          <td class="td text-sm leading-5 text-gray-900" style="text-transform: capitalize">{{ Auth::user()->student->courses()->first()->status }}</td>
                                          <td class="td text-sm leading-5 text-gray-900 d">{{ Auth::user()->student->group->name }}</td>
                                          <td class="td text-sm leading-5 text-gray-900 d">
                                              <a href="" title="View Your Coursework Marks">Coursework</a>
                                          </td>
                                          <td class="td text-sm leading-5 text-gray-900">
                                            <a href="" title="View Your Attendance">Attendance</a>
                                          </td>
                                      </tr>
                                    </tbody>
                                  </table>
                               </div>
                               <div class="mb-2">
                                   <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                       <span clas="text-gray-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                       </span>
                                       <span class="tracking-wide">Mentoring</span>
                                   </div>
                                   <table class="min-w-full">
                                    <thead>
                                      <tr>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Current Mentor</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Mentor's Email</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Date Last Seen</th>
                                          <th class="th theading" style="background-color: #013676; color: #fff;">Mentoring Feedback</th>
                                      </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                      <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                          <td class="td text-sm leading-5 text-gray-900">{{ Auth::user()->student->mentor->name }}</td>
                                          <td class="td text-sm leading-5 text-gray-900">
                                             <a href="mailto:{{ Auth::user()->student->mentor->email }}">{{ Auth::user()->student->mentor->email }}</a>
                                          </td>
                                          <td class="td text-sm leading-5 text-gray-900 d">{{ Auth::user()->student->mentor_last_seen }}</td>
                                          <td class="td text-sm leading-5 text-gray-900 d">
                                            <a href="" title="Mentoring Session Feedback Form">Mentoring Feedback Form</a>
                                          </td>
                                      </tr>
                                    </tbody>
                                  </table>
                               </div>
                               @if (count($loaned_items) != 0)
                               <div class="mb-2 mt-2">
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                    <span clas="text-gray-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path fill="#fff"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Loaned Items</span>
                                </div>
                                <table class="min-w-full">
                                 <thead>
                                   <tr>
                                       <th class="th theading" style="background-color: #013676; color: #fff;">Item On Loan</th>
                                       <th class="th theading" style="background-color: #013676; color: #fff;">Charges (Ksh)</th>

                                   </tr>
                                 </thead>
                                 <tbody class="bg-white">
                                    @foreach ($loaned_items as $item)
                                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                        <td class="td text-sm leading-5 text-gray-900">{{$item->name}}</td>
                                        <td class="td text-sm leading-5 text-gray-900">{{number_format($item->charges)}}</td>
                                    </tr>
                                @endforeach
                                 </tbody>
                               </table>
                            </div>
                            @endif
                           </div>
                           <!-- End of Experience and education grid -->
                       </div>
                       <!-- End of profile tab -->
                   </div>
               </div>
           </div>
       </div>
</body>
</html>
@endsection
