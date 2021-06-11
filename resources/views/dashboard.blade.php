@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
        <!--HOME PAGE START-->
		<div class="content-box">
            <div class="content">
                <h1 class="heading">Student Profile</h1>
                <div class="left-col">
                    <center>
                    <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->avatar . '') }}" class="rounded-circle" style="height:200px;width:200px" onerror="this.src='uploads/avatars/avatar.jpeg';" class="profile_image2"width="110" height="110" alt="">
                    <p class="caption" style="margin-top: 30px">
                        <span id="FullName" style="font-size: 1.3em; font-weight: bold; color: #013676;">{{ Auth::user()->name }}</span>
                    </p>
                </center>
                </div>
                <div class="right-col">
                    <div class="info">
                        <table class="table" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td class="subhead">Student No:</td>
                                    <td>
                                        <span>{{ Auth::user()->student->admission_no }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <?php
                                        $names = explode(",", Auth::user()->name);
                                        $surname = $names[0];
                                        $other = $names[1];
                                    ?>
                                    <td class="subhead">Surname:</td>
                                    <td>
                                        <span>{{ $surname }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Other Names:</td>
                                    <td>
                                        <span>{{ $other}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Date Of Birth:</td>
                                    <td>
                                        <span>{{ Auth::user()->student->dob }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Mobile Phone No:</td>
                                    <td>
                                        <span>{{ Auth::user()->student->phone }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Email Address:</td>
                                    <td>
                                        <span>{{ Auth::user()->email }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Previous School:</td>
                                    <td>
                                        <span>{{ Auth::user()->student->prev_school }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subhead">Religion:</td>
                                    <td>
                                        <span>{{ Auth::user()->student->religion }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <h2 class="heading2">Academic Programmes</h2>
            <div>
                <div id="Programs"></div>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Programmes</th>
                            <th>Status</th>
                            <th>Intake</th>
                            <th colspan="2">Coursework & Attendance</th>
                        </tr>
                        <tr class="trow">
                            <td>
                                <span>{{ Auth::user()->student->courses()->first()->name }}</span>
                            </td>
                            <td>
                                <span style="text-transform: capitalize">{{ Auth::user()->student->courses()->first()->status }}</span>
                            </td>
                            <td>
                                <span>{{ Auth::user()->student->intake }}</span>
                            </td>
                            <td>
                                <a href="" aria-label="View Your Coursework Marks">Coursework</a>
                            </td>
                            <td>
                                <a href="" aria-label="View Your Attendance">Attendance</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Mentoring" style="padding-bottom: 20px;">
                <h2 class="heading2">Mentoring</h2>
                <div>
                    <div id="Mentor"></div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Current Mentor</th>
                                <th>Mentor's Email</th>
                                <th>Date Last seen</th>
                                <th>Mentoring Feedback Form</th>
                                <th>Strathmore University Professional License</th>
                            </tr>
                            <tr class="trow">
                                <td>
                                    <span>{{ Auth::user()->student->mentor->name }}</span>
                                </td>
                                <td>
                                    <a href="mailto:david@strathmore.edu">{{ Auth::user()->student->mentor->email }}</a>
                                </td>
                                <td>
                                    <span>{{ Auth::user()->student->last_seen }}</span>
                                </td>
                                <td>
                                    <a href="" aria-label="Mentoring Session Feedback Form">Fill in the Mentoring Feedback Form</a>
                                </td>
                                <td>
                                    <a href="" aria-label="Take the survey">Take the survey</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--HOME PAGE END-->
	</body>
</html>
