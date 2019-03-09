@extends('layouts.index')
@section('regdetails')
<div class="container border border-primary"  style="margin-top: 3vh;margin-bottom: 3vh;>
    <div class="row">
        <div class="col-md-8">
            <h3 class="my-4">
                Registration
            </h3>
            <div class="card mb-4">
                <div class="card-body">
                    <ul>    <li>
                    Foreign Delegates: USD 100
                        </li>
                        <li>
                    Indian Delegates: INR 4000
                        </li>
                        <li>
                    Full Time Students: INR 1500
                        </li>
                    </ul>
                </div>

                <div class="card-body mb-4" id="tojustify">
                    Please note that Conference Attendee / Listener registration fee doesn’t cover registration kit and proceedings.
                    The conference registration covers conference proceedings, conference kit, admission to all workshops, coffee breaks, lunch and banquet. The registration doesn’t cover accommodation, transportation etc.

                    All accepted papers will be published in the online proceedings (with access code). At least one author of an accepted paper is required to register at the full registration rate. If an author has got more than one accepted papers, each paper has also to be registered.

                    It may be ensured that the Remitter’s (Participant/Author) name, EDAS Paper-ID and the Purpose of remittance (Registration Fees) is clearly mentioned by the Remitter in the Funds Transfer Application. Indian Nationals or Students residing in overseas have to pay foreign authors' registration rate only.

                    Student Registration: Students (UG/PG Students and only Full time Research/PhD Scholars) have to submit their scanned copy of the ID card along with the Registration form to avail the deduction. When the students are coming for the presentation, they have to produce the original Student ID card and bonafied certificate from the Head of the Institution/Department.
                </div>


                <a href="{{ asset('/reg-form') }}">
                    <input type="button" value="Register Here" class="btn btn-primary">
                </a>
            </div>
        </div>
    </div>
</div>
    @endsection()