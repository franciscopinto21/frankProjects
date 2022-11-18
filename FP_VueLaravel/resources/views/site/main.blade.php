@extends('site.layout.header')

@section('username', 'Francisco L B Pinto')
@section('mainPage')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('profile/2.png') }}" alt="User profile picture">
              <h3 class="profile-username text-center">Francisco L B Pinto</h3>
              <p class="text-muted text-center">Software Engineer</p>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">            
                Universidade Estácio de Sá <br>
                Systems and Telecommunications Networks
                2011 - 2015
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">Porto Velho, Rondônia - Brazil</p>
              <hr>
              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              <p>
                <span class="label label-info">HTML</span>
                <span class="label label-success">CSS</span>
                <span class="label label-danger">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Laravel</span>
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>Software developer with 10 years of experience in different industries, working in frontend and backend, development environments, repositories, and also working with requirements gathering, functional and technical specifications.
                After several years coding for a small company where I gathered enough experience in WEB-based systems, I joined a worldwide company where I could learn about processes, architecture, agile and waterfall methodology, and work as a team.
                Good verbal and written communication abilities, a positive attitude, and strong leadership.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Jobs</a></li>
              <li><a href="#timeline" data-toggle="tab">Courses</a></li>
              <li><a href="#settings" data-toggle="tab">Skills</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('logo/tomia.png') }}" alt="user image">
                        <span class="username">
                          <a href="#">Tomia</a>
                          <span class="pull-right btn-box-tool">Business analyst - R&D</span>                          
                        </span>
                    <span class="description">Feb 2019 - Oct 2022 · 3 yrs 9 mos</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    ▪ Analyze system output/operations in relation to client requirements, identify inconsistencies, and propose and implement corrective/optimal solutions.
                    <br>▪ Develop processes and procedures for typical customized system applications. Design integration and user acceptance test plans, perform internal testing and technical specification.
                    <br>▪ Perform troubleshooting, debugging, analysis of system issues.
                    <br>▪ Backend data analysis and manipulation. Conduct basic code reviews and unit testing.
                  </p>

                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('logo/telarix.png') }}" alt="user image">
                        <span class="username">
                          <a href="#">Telarix</a>
                          <span class="pull-right btn-box-tool">Business analyst</span>    
                        </span>
                    <span class="description">Aug 2016 - Feb 2019 · 2 yrs 7 mos</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    ▪ Analyze system output/operations in relation to client requirements, identify inconsistencies, and propose and implement corrective/optimal solutions.
                    <br>▪ Develop processes and procedures for typical customized system applications. Design integration and user acceptance test plans, perform internal testing and technical specification.
                    <br>▪ Perform troubleshooting, debugging, analysis of system issues.
                    <br>▪ Backend data analysis and manipulation. Conduct basic code reviews and unit testing.
                    <br>
                    <br>
                    Accomplishments:
                    <br>▪ Successfully Implementation of IDT Carrier for the Bill Receipt Service.
                    <br>▪ Bill Receipt Service Improvements Project I 
                    <br>- Planning and design of new tools.
                    <br>- Abbyy Converter Implementation
                    <br>▪ Bill Receipt Service Improvements Project II
                    <br>- Planning and design of more tools.
                    <br>▪ Development of an application for internal use to control contracts for all customers
                    <br>- Linux Server
                    <br>- Frontend (HTML5, CSS3, JavaScript)
                    <br>▪ Bootstrap, Yarn, Webpack, Babel, React
                    <br>- Backend (PHP)
                    <br>▪ Slim framework, PHPUnit.
                    <br>- MySql
                  </p>

                </div>

                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('logo/renards.png') }}" alt="user image">
                        <span class="username">
                          <a href="#">Renards</a>
                           <span class="pull-right btn-box-tool">Software Engineer</span>
                        </span>
                    <span class="description">Feb 2019 - Oct 2022 · 3 yrs 9 mos</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    A company of web application development for different types of businesses. Acting as lead developer, managing frontend and backend, and APIs
                  <br><br>
                    Accomplishments:
                    <br>- 2012 - Web System for beauty and aesthetics business.
                    <br>▪ Linux Server, Frontend (HTML5, CSS3, JavaScript), Backend (PHP), and MySql.
                    <br>▪ SMS API
                    <br>
                    <br>- 2013 - Web System for Health Insurance business.
                    <br>▪ Linux Server, Frontend (HTML5, CSS3, JavaScript), Backend (PHP), and MySql.
                    <br>▪ Boletos PHP, SendMail Server
                    <br>
                    <br>- 2015 - Web System for Tourism Agency business.
                    <br>▪ Linux Server, Frontend (HTML5, CSS3, JavaScript), Backend (PHP), and MySql.
                    <br>
                    <br>- 2019 - Web System for Real Estate business.
                    <br>▪ Linux Server
                    <br>▪ Frontend (HTML5, CSS3, JavaScript)
                    <br>Bootstrap, Yarn, Webpack, Babel, React
                    <br>▪ Backend (PHP)
                    <br>Slim framework, PHPUnit.
                    <br>▪ APIs: Google Maps, Firebase, Twilio, ZipCode
                    <br>▪ MySql
                  </p>

                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection    