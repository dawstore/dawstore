@extends('layouts.app')
@section('content')
<div class="container">
    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form id="msform">
                <div class="form-group">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active"><span class="desktop">Log In</span></li>
                        <li><span class="desktop">Applicant Info</span></li>
                        <li><span class="desktop">Requirements</span></li>
                        <li><span class="desktop">Options</span></li>
                        <li><span class="desktop">Review</span></li>
                        <li><span class="desktop">Confirmation</span></li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Log In</h2>
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="button" name="next" class="next btn btn-ism" value="Next" />
                        <h6 class="float-left">...or <a href="#">Register</a> now.</h6>
                    </fieldset>
                    <fieldset>
                        <h1 class="fs-title d-inline text-center">Applicant Info</h1>
                        <div class="row text-left mb-3">
                            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                                <h2 class="fs-title text-center">Your Info</h2>
                                <p><span class="label">Name: </span>Jared Newnam<br>
                                    <span class="label">Member Status: </span>Member<br>
                                    <span class="label">Email: </span>jnewnam@supplymanagement.org
                                </p>
                                <a class="btn btn-secondary" href="#">Update Info</a>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h2 class="fs-title text-center">Certificate Info</h2>
                                <small class="text-muted text-center mb-2">Name as it will appear on your certificate:</small>
                            </div>
                        </div>
                        <input type="button" name="next" class="next btn btn-ism" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Requirements</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <div class="info">
                            <a tabindex="0" class="btn btn-sm btn-ism btn-round float-right mb-3" role="button" data-html="true" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="<strong>Requirements</strong>" data-content="<p>Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                  <ul>
                                    <li>- Cras justo odio</li>
                                    <li>- Dapibus ac facilisis in</li>
                                    <li>- Morbi leo risus</li>
                                    <li>- Porta ac consectetur ac</li>
                                    <li>- Vestibulum at eros</li>
                                  </ul>
                                   <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>">?
                            </a>
                        </div>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
                        <input type="button" name="next" class="next btn btn-ism" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Options</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
                        <input type="button" name="next" class="next btn btn-ism" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Review</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
                        <input type="button" name="next" class="next btn btn-ism" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <h3 class="fs-subtitle">Fill in your credentials</h3>
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Password" />
                        <input type="password" name="cpass" placeholder="Confirm Password" />
                        <input type="button" name="previous" class="previous btn btn-secondary" value="Previous" />
                        <input type="submit" name="submit" class="submit btn btn-ism" value="Submit" />
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <!-- /.MultiStep Form -->
</div>

@endsection
