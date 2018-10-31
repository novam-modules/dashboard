<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Profile</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Profile </li>
    </ul>
</div>
<section>
<div class="row">
    <div class="col-lg-8">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Time Sheet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="space-tab" data-toggle="tab" href="#space" role="tab" aria-controls="space"
                    aria-selected="true">Work Space</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits"
                    aria-selected="false">Benefits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="welcome-tab" data-toggle="tab" href="#welcome" role="tab" aria-controls="welcome"
                    aria-selected="false">Welcome</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            </div>
            <div class="tab-pane" id="space" role="tabpanel" aria-labelledby="space-tab">

            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Profile</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group mb-4">
                                    <label class="form-label">Company</label>
                                    <input type="text" placeholder="Company" value="Nathan &amp; Nathan" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group mb-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" placeholder="Username" value="nathan" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group mb-4">
                                    <label class="form-label">Email address</label>
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="form-label">First Name</label>
                                    <input type="text" placeholder="First name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="form-label">Address</label>
                                    <input type="text" placeholder="Home Address" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group mb-4">
                                    <label class="form-label">City</label>
                                    <input type="text" placeholder="City" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group mb-4">
                                    <label class="form-label">ZIP</label>
                                    <input type="number" placeholder="ZIP" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-4">
                                    <label class="form-label">Country</label>
                                    <select class="form-control custom-select">
                                        <option value="">UK</option>
                                        <option value="">US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">About Me</label>
                                    <textarea rows="5" placeholder="Here can be your description" value="Mike" class="form-control">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">...</div>
            <div class="tab-pane" id="welcome" role="tabpanel" aria-labelledby="welcome-tab">

            </div>
        </div>
        {{-- <div class="card">
            <div class="card-header">
                <div class="input-group">
                    <input type="text" placeholder="Message" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary"><i class="fa fa-send"></i></button>
                    </div>
                </div>
            </div>
            <div class="list-group card-list-group">
                <div class="list-group-item py-5">
                    <div class="media">
                        <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-7.jpg)"
                            class="media-object avatar avatar-md mr-3"></div>
                        <div class="media-body">
                            <div class="media-heading"><small class="float-right">10 min</small>
                                <h5>Nathan Andrews</h5>
                            </div>
                            <div class="text-muted text-small">One morning, when Gregor Samsa woke from
                                troubled dreams, he found himself transformed in his bed into a horrible
                                vermin. He lay on his armour-like back, and if he lifted his head a little he
                                could see his brown belly, slightly domed and divided by arches into stiff
                                sections</div>
                            <div class="media-list">
                                <div class="media mt-4">
                                    <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-3.jpg)"
                                        class="media-object avatar mr-3"></div>
                                    <div class="media-body text-muted text-small"><strong class="text-dark">Serenity
                                            Mitchelle: </strong>The bedding was hardly able to cover it and
                                        seemed ready to slide off any moment. His many legs, pitifully thin
                                        compared with the size of the rest of him, waved about helplessly as he
                                        looked. &quot;What's happened to me?&quot; he thought. It wasn't a
                                        dream.</div>
                                </div>
                                <div class="media mt-4">
                                    <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-1.jpg)"
                                        class="media-object avatar mr-3"></div>
                                    <div class="media-body text-muted text-small"><strong class="text-dark">Tony
                                            O'Brian: </strong>His room, a proper human room although a little
                                        too small, lay peacefully between its four familiar walls. A collection
                                        of textile samples lay spread out on the table.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item py-5">
                    <div class="media">
                        <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-7.jpg)"
                            class="media-object avatar avatar-md mr-3"></div>
                        <div class="media-body">
                            <div class="media-heading"><small class="float-right text-muted">12 min</small>
                                <h5>Nathan Andrews</h5>
                            </div>
                            <div class="text-muted text-small">Samsa was a travelling salesman - and above it
                                there hung a picture that he had recently cut out of an illustrated magazine
                                and housed in a nice, gilded frame.</div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item py-5">
                    <div class="media">
                        <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-7.jpg)"
                            class="media-object avatar avatar-md mr-3"></div>
                        <div class="media-body">
                            <div class="media-heading"><small class="float-right text-muted">34 min</small>
                                <h5>Nathan Andrews</h5>
                            </div>
                            <div class="text-muted text-small">He must have tried it a hundred times, shut his
                                eyes so that he wouldn't have to look at the floundering legs, and only stopped
                                when he began to feel a mild, dull pain there that he had never felt before.</div>
                            <div class="media-list">
                                <div class="media mt-4">
                                    <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-6.jpg)"
                                        class="media-object avatar mr-3"></div>
                                    <div class="media-body text-muted text-small"><strong class="text-dark">Javier
                                            Gregory: </strong>One morning, when Gregor Samsa woke from troubled
                                        dreams, he found himself transformed in his bed into a horrible vermin.
                                        He lay on his armour-like back, and if he lifted his head a little he
                                        could see his brown belly, slightly domed and divided by arches into
                                        stiff sections</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
    <div class="col-lg-4">
        <form class="card">
            <div class="card-header">
                <h3 class="card-title">My Profile</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-auto d-flex align-items-center"><span style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-7.jpg)"
                            class="avatar avatar-lg"></span></div>
                    <div class="col">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input placeholder="Your name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Bio</label>
                    <textarea rows="8" class="form-control">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input placeholder="you@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" value="password" class="form-control">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
</section>
