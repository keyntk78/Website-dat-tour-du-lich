@extends('layouts.index')
 @section('title')
     {{ $title }}
 @endsection

@section('content')
     <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Shop Layout</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                                    </li>
                                    <li>Shop List Fullwidth</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content text-charcoal pt-8">
                                <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                    <div class="product-list-view row">
                                        @if (!empty($chitiettour[0]))
                                           @foreach ($chitiettour as $item)
                                            <div class="col-12 pt-6">
                                                <div class="product-item">
                                                    <div class="product-img img-zoom-effect">
                                                        <a href="{{ route('chitiettour', ['id'=>$item->id]) }}">
                                                            <img class="img-full" src="{{ asset(PathImages($item->hinh_anh)) }}" alt="Product Images">
                                                        </a>
                                                    </div>
                                                    <div class="product-content align-self-center">
                                                        <a class="product-name pb-2" href="{{ route('chitiettour', ['id'=>$item->id]) }}">{{ $item->tour }}</a>
                                                        <div class="price-box pb-1">
                                                            <span class="new-price">Gi?? ng?????i l???n: {{ currency_format($item->gia_nguoi_lon )}}</span>
                                                        </div>
                                                         <div class="price-box pb-1">
                                                            <span class="new-price">Gi?? tr??? em: {{ currency_format($item->gia_tre_em )}}</span>
                                                        </div>
                                                         <div class="price-box pb-1">
                                                            <span class="new-price">Ng??y kh???i h??nh: {{ dinhDangNgayThang($item->ngay_di) }}</span>
                                                        </div>
                                                        <p class="short-desc mb-0">{{ $item->lich_trinh }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                        @else
                                            <p class="not_found">Hi???n t???i ch??a c?? tour n??o</p>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-area pt-10">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        {{ $chitiettour->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
@endsection