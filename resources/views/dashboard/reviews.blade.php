@extends('layouts.normal_dashboard')
@section('content')
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="dashboard-page-header">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="dashboard-page-title">Reviews</h3>
                    <p>Check your latest reviews.</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 col-12">
                <div class="card card-rating">
                    <div class="card-body">
                        <h5 class="mb30">Average Ratings</h5>
                        @isset($AvgReviewsRating)
                        <div class="review-total">{{ number_format($AvgReviewsRating, 2, '.', ',') }}</div>
                        @endisset
                        @empty($AvgReviewsRating)
                        <div class="review-total">-</div>
                        @endempty
                        <div class="review-text">Reviews</div>
                        @if($AvgReviewsRating == 5.0)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 4.5)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 4)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 3.5)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa  fa-star-half"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 3.0)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 2.5)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 2.0)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 1.5)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                            <i class="far fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 1.0)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @elseif($AvgReviewsRating >= 0.5)
                        <span class="rated mt40  d-block">
                            <i class="fa fa-star-half"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @else
                        <span class="rated mt40  d-block">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far  fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        @endif
                        @isset($AvgReviewsRating)
                        <small>{{ number_format($AvgReviewsRating, 2, '.', ',') }} average based on {{ $ReviewsCount }} ratings.</small>
                        @endisset
                        @empty($AvgReviewsRating)
                        <small>average based rating not available.</small>
                        @endempty
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-6 col-12">
                <div class="card card-review-summary">
                    <div class="card-body">
                        <h5 class="mb30">Reviews Summary</h5>
                        <div class="row mb-2">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <h5 class="mb0 text-right">Average Rating</h5>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                @if($AvgReviewsRating == 5.0)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 4.5)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 4)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 3.5)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 3.0)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 2.5)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 2.0)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 1.5)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 1.0)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @elseif($AvgReviewsRating >= 0.5)
                                <div class="progress mt10">
                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                @else
                                <span class="rated mt40  d-block">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far  fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                @endif
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-3  col-sm-12 col-12 text-right">
                                <h6 class="text-dark mb0">{{ number_format($AvgReviewsRating/5*100, 0, '.', ',') }}%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card review-summary-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color: #00a591; font-weight:500;">Name</th>
                                <th style="color: #00a591; font-weight:500;">Rating</th>
                                <th style="color: #00a591; font-weight:500;">Email</th>
                                <th style="color: #00a591; font-weight:500;">Time</th>
                                <th style="color: #00a591; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Review as $Reviews)
                            <tr>
                                <td class="review-summary-name">{{ $Reviews->user_name }}</td>
                                <td class="review-summary-rating">
                                    @if($Reviews->rating == 5.0)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa  fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 4.5)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa  fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 4)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 3.5)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa  fa-star-half"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 3.0)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 2.5)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 2.0)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 1.5)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 1.0)
                                    <span class="rated">
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @elseif($Reviews->rating >= 0.5)
                                    <span class="rated">
                                        <i class="fa fa-star-half"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @else
                                    <span class="rated">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far  fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    @endif
                                    <span class="ml-2">{{ number_format($Reviews->rating, 2, '.', ',') }}</span>
                                </td>
                                <td class="review-summary-id">{{ $Reviews->user_email }}</td>
                                <td class="review-summary-time">{{ $Reviews->created_at->diffForHumans() }}</td>
                                <td class="review-summary-action">
                                    <a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-one" data-text-swap="close" data-text-original="Details" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Details </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="12" class="expandable-info">
                                    <div class="collapse expandable-collapse" id="collapseExample1">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <!-- review-user -->
                                                <div class="review-user">
                                                    @if($user->image)
                                                    <span class="user-icon">
                                                        <img src="user-image/{{ $user->image }}" alt="" class="rounded-circle mb10">
                                                    </span>
                                                    @else
                                                    <span class="user-icon">
                                                        <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle mb10">
                                                    </span>
                                                    @endif
                                                    <div class="user-meta">
                                                        <span class="user-name">{{ $Reviews->user_name }}</span>
                                                        <span class="user-review-date">{{ $Reviews->created_at->diffForHumans() }}</span>
                                                        <!-- <div class="given-review">
                                                            <span class="rated"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <!-- /.review-user -->
                                                <!-- review-descripttions -->
                                                <div class="review-descriptions">
                                                    <p>{{ $Reviews->review_text }}</p>
                                                    <!-- <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="review-list">
                                                                <div class="review-for">Quality Service</div>
                                                                <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas  fa-star"></i> </span></div>
                                                                <div class="review-number">5</div>
                                                            </div>
                                                            <div class="review-list">
                                                                <div class="review-for">Facilities</div>
                                                                <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                <div class="review-number">5</div>
                                                            </div>
                                                            <div class="review-list">
                                                                <div class="review-for">Staff</div>
                                                                <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                <div class="review-number">5</div>
                                                            </div>
                                                            <div class="review-list">
                                                                <div class="review-for">Flexibility</div>
                                                                <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                <div class="review-number">5</div>
                                                            </div>
                                                            <div class="review-list">
                                                                <div class="review-for">Value of money</div>
                                                                <div class="review-rating"><span class="rated"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span></div>
                                                                <div class="review-number">5</div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- /.review-descripttions -->
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-center">
            {{ $Review->links() }}
        </div>
    </div>
</div>
@endsection 