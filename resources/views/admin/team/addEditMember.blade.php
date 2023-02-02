@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Team Member </h4>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#job"><i class="la la-plus me-2"></i> Jobs</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>
                                </li>
                            </ul>
                            <form action="{{route('team-store_member')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="mb-3 row">
                                                <input type="hidden" name="id"  class="form-control" id="id" />
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="image_member">Image
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="file" name="image_member" class="form-control" id="image_member"  placeholder="Enter a Image Memeber.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Image Memeber.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="member_full_name">Full Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="member_full_name" class="form-control" id="member_full_name"  placeholder="Enter a Member Full Name.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Member Full Name.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="job">
                                        <div class="pt-4">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="member_job_uz">Job Uz
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="member_job_uz" class="form-control" id="member_job_uz"  placeholder="Enter a Member Job Uz.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Member Job Uz.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="member_job_ru">Job Ru
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="member_job_ru" class="form-control" id="member_job_ru"  placeholder="Enter a Member Job Ru.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Member Job Ru.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="member_job_en">Job En
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="member_job_en" class="form-control" id="member_job_en"  placeholder="Enter a Member Job En.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Member Job En.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="pt-4">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="facebook_url">Facebook Url
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="facebook_url" class="form-control" id="facebook_url"  placeholder="Enter a Facebook url.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Facebook Url.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="twitter_url">Twitter Url
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="twitter_url" class="form-control" id="twitter_url"  placeholder="Enter a Twitter url.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Twitter Url.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="linkedin_url">Linkedin Url
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="linkedin_url" class="form-control" id="linkedin_url"  placeholder="Enter a Linkedin url.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Linkedin Url.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="instagram_url">Instagram Url
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="instagram_url" class="form-control" id="instagram_url"  placeholder="Enter a Instagram url.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Instagram Url.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-success">Yuborish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="DefaultTab-html" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body p-1">
                        <pre class="m-1"><code class="language-html">&lt;!-- Nav tabs --&gt;
                        &lt;div class="default-tab"&gt;
                            &lt;ul class="nav nav-tabs" role="tablist"&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link active" data-bs-toggle="tab" href="#home"&gt;&lt;i class="la la-home me-2"&gt;&lt;/i&gt; Home&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" data-bs-toggle="tab" href="#profile"&gt;&lt;i class="la la-user me-2"&gt;&lt;/i&gt; Profile&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" data-bs-toggle="tab" href="#contact"&gt;&lt;i class="la la-phone me-2"&gt;&lt;/i&gt; Contact&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" data-bs-toggle="tab" href="#message"&gt;&lt;i class="la la-envelope me-2"&gt;&lt;/i&gt; Message&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                            &lt;div class="tab-content"&gt;
                                &lt;div class="tab-pane fade show active" id="home" role="tabpanel"&gt;
                                    &lt;div class="pt-4"&gt;
                                        &lt;h4&gt;This is home title&lt;/h4&gt;
                                        &lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        &lt;/p&gt;
                                        &lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="tab-pane fade" id="profile"&gt;
                                    &lt;div class="pt-4"&gt;
                                        &lt;h4&gt;This is profile title&lt;/h4&gt;
                                        &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        &lt;/p&gt;
                                        &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="tab-pane fade" id="contact"&gt;
                                    &lt;div class="pt-4"&gt;
                                        &lt;h4&gt;This is contact title&lt;/h4&gt;
                                        &lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        &lt;/p&gt;
                                        &lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                        &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="tab-pane fade" id="message"&gt;
                                    &lt;div class="pt-4"&gt;
                                        &lt;h4&gt;This is message title&lt;/h4&gt;
                                        &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        &lt;/p&gt;
                                        &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection