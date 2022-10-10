<div class="container-fluid  p-0 home-intro">
    <div class="container p-0">
        <div class="container-fluid mb-5 py-5">
            <form class="w-90 mx-auto text-center" action="{{url('registrationform')}}" method="POST" enctype="multipart/form-data">
                <!-- personal information starts here -->
                <h2 class="text-left p-3 text-dark">Personal Information</h2>

                @csrf
                
                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="First_Name">First Name</label>
                        <input type="text" class="form-control" id="First_Name" name="First_Name" value="{{old('First_Name')}}" placeholder="Jhon" required />
                    </div>

                    <div class="col form-group text-left">
                        <label for="Last_Name">Last Name</label>
                        <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{old('Last_Name')}}" placeholder="Doe" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std_Gender">Gender</label>
                        <select required name="Std_Gender" id="Std_Gender" class="form-control">
                            {{old('Std_Gender')}}
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std_Religion">Student Religion</label>
                        <select required name="Std_Religion" id="Std_Religion" class="form-control">
                            {{old('Std_Religion')}}
                            <option value="">Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Christian">Christian</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Atheist">Atheist</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std_D_O_B">Date of Birth</label>
                        <input type="date" name="Std_D_O_B" id="Std_D_O_B" value="{{old('Std_D_O_B')}}" placeholder="dd-mm-yyyy" class="form-control" required />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std_CNIC">CNIC</label>
                        <input type="number" name="Std_CNIC" id="Std_CNIC" value="{{old('Std_CNIC')}}" placeholder="00000-0000000-0" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std_Nationality">Cell Nationality</label>
                        <input type="text" name="Std_Nationality" id="Std_Nationality" value="{{old('Std_nationality')}}" placeholder="Pakistan" class="form-control" required />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std_Address">Address</label>
                        <input type="text" name="Std_Address" id="Std_Address" value="{{old('Std_Address')}}" placeholder="street 123 " class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std_Number">Cell Number</label>
                        <input type="number" name="Std_Number" id="Std_Number" value="{{old('Std_Number')}}" placeholder="+92300000000" class="form-control" required />
                    </div>
                    <div class="col form-group text-left">
                        <label for="Std_Email">Email</label>
                        <input type="email" name="Std_Email" id="Std_Email" value="{{old('Std_Email')}}" placeholder="example12@.com" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Course_select">Select Course</label>
                        <select required name="Course_select" id="Course_select" class="form-control">
                            {{old('Course_select')}}
                            <option value="">--Select Course--</option>
                            @foreach($course as $courses)
                                <option value="{{$courses->course_name}}">{{$courses->course_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Course_Knowledge">Course Knowledge</label>
                        <select required name="Course_Knowledge" id="Course_Knowledge" class="form-control">
                            {{old('Course_Knowledge')}}
                            <option value="">Course Knowledge</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advance">Advance</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="">Passport Pic</label>
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="Std_Pic" id="Std_Pic" required />
                                <label class="custom-file-label" for="Std_Pic" value="{{old('Std_Pic')}}">Choose file...</label>
                            </div>
                        </div>
                    </div>
                    <div class="col form-group text-left">
                        <label for="">Domicile</label>
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="Std_Domicile" id="Std_Domicile" />
                                <label class="custom-file-label" for="Std_Domicile" value="{{old('Std_Domicile')}}">Choose file...</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- personal information starts here -->

                <!-- father information starts here -->
                <h2 class="text-left p-3 text-dark">Guardian / Father Information</h2>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian_Name">Guardian Name</label>
                        <input type="text" class="form-control" id="Guardian_Name" name="Guardian_Name" value="{{old('Guardian_Name')}}" placeholder="Jhon Doe">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian_Occupation">Guardian Occupation</label>
                        <input type="text" class="form-control" id="Guardian_Occupation" name="Guardian_Occupation" value="{{old('Guardian_Occupation')}}" placeholder="Businessman">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian_Email">Guardian Email</label>
                        <input type="Email" class="form-control" id="Guardian_Email" name="Guardian_Email" value="{{old('Guardian_Email')}}" placeholder="Example12@.com">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian_Number">Guardian Number</label>
                        <input type="number" class="form-control" id="Guardian_Number" name="Guardian_Number" value="{{old('Guardian_Number')}}" placeholder="+92312345678">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Guardian_Cnic">Guardian CNIC</label>
                        <input type="number" class="form-control" id="Guardian_Cnic" name="Guardian_Cnic" value="{{old('Guardian_CNIC')}}" placeholder="00000-0000000-0">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Guardian_Relation">Relation with Guardian</label>
                        <input type="datetime" class="form-control" id="Guardian_Relation" name="Guardian_Relation" value="{{old('Guardian_Relation')}}" placeholder="Father">
                    </div>
                </div>
                <!-- father information ends here -->
                <hr class="w-90 mx-auto" />

                <!-- educational information starts here -->
                <h2 class="text-left p-3 text-dark">Education Information</h2>
                <div class="form-row">
                    <div class="col form-group text-left">
                        <label for="Std_Education">Enter your maximum Qualification</label>
                        <select required name="Std_Education" id="Std_Education" class="form-control">
                            {{old('Std_Education')}}
                            <option value="">Education level</option>
                            <option value="Secondary">Secondary</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>
                            <option value="p.h.d">p.h.d</option>
                        </select>
                    </div>
                    <div class="col form-group text-left">
                        <label for="Edu_Institute">Institute Name</label>
                        <input type="text" class="form-control" id="Edu_Institute" name="Edu_Institute" value="{{old('Edu_Institute')}}" placeholder="High school">
                    </div>
                    <div class="col form-group text-left">
                        <label for="Y_O_P">Year of Passing</label>
                        <input type="date" class="form-control" id="Y_O_P" name="Y_O_P" value="{{old('Y_O_P')}}" placeholder="dd-mm-yyyy">
                    </div>
                </div>
                <!-- education information ends here -->

                <hr>

                <!-- undertaking starts here -->
                <h2 class="text-left p-3 text-dark">Underaking</h2>
                <div class="d-flex align-item-baseline">
                    <div class="p-3">
                        <input type="checkbox" name="undertaking" id="undertaking" class="" value="{{old('undertaking')}}">
                    </div>
                    <p class="text-left">I hereby declare that the information furnished above is true, complete and correct to the best of my knowledge and belief. I understand that in the event of my information being found false or incorrect at any stage, my candidature shall be liable to cancellation / termination without notice or any compensation.</p>
                </div>
                <!-- undertaking ends here -->
                <button type="submit" class="btn btn-success text-white px-5 py-3 mt-5 mx-auto d-block rounded-pill font-weight-bold">
                    Submit Form
                </button>
            </form>
        </div>
    </div>
</div>