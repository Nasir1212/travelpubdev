@extends("layout.master")
@section("content")

<main>
    <section class="section_navigate_slide_Img_section position-relative">
        <div class="slide_container d-flex justify-content-around">
            @foreach (App\Models\SliderImg::all() as $image )
            <div class="slideing_img">
                <img src="https://img.fwttbd.com/images/{{$image->slider_path}}" alt="">
            </div>
            @endforeach
        </div>

        <div class="nav_icon_container d-flex justify-content-between d-none ">
            <span class="fas">&#xf100;</span>
            <span class="fas">&#xf101;</span>

            
        </div>
    </section>

    <section class="recommended_section mb-5">
        <div class="recommended_module">
            <h3 class="recommended_title">Featured Properties</h3>
            <div class="recommend_module_usp_container d-flex">

                <div class="recommend_module_usp_container_col mr-3 d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Flexibooking available</p>
                </div>
                <div class="recommend_module_usp_container_col mr-3  d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Flexibooking available</p>
                </div>

                <div class="recommend_module_usp_container_col mr-3  d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Flexibooking available</p>
                </div>

            </div>

            <div class=" tab_item_container">
                @foreach (App\Models\fpTag::all() as $data )
                <span class="tab_item" id="pft_{{$data->id}}">{{$data->tag}}</span>
                @endforeach
            </div>

            <div class="new_recommend_list_container">
                @foreach (App\Models\fpCard::all() as $data )

            
                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://ak-d.tripcdn.com/images/200c0k000000b6ierE28B_R_550_412_R5_D.jpg" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">Baiyoke Sky Hotel Bangkok </div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"><b class="text-muted">From</b> <img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>

                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://ak-d.tripcdn.com/images/100c1f000001gsx7m70B5_C_550_412.jpg" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">Bangkok Marriott Marquis Queen’s Park</div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"> <b class="text-muted">From</b><img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>

                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://ak-d.tripcdn.com/images/100s13000000u3nqm8913_C_550_412.jpg" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">Buckingham Palace</div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"><b class="text-muted">From</b>  <img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>

                @endforeach
                <div class="new_recommend_list_col position-relative">
                    <div class="new_recommend_more_card_img">
                        <img src="https://ak-s.tripcdn.com/modules/ibu/online-home/b0c8dc949e5e03c58041e395601d75a7.b0c8dc949e5e03c58041e395601d75a7.png
                        " alt="">
                    </div>

                    <div class="new_recommend_more_card_btn position-absolute ">
                        <h4>Discover great deals on hotels around the world</h4>
                        <button class="btn btn-block btn-primary">Go Now</button>
                    </div>

                   
                </div>


            </div>
        </div>
    </section>

    <section class="recommended_section  mb-5">
        <div class="recommended_module popular_attractions">
        <h3 class="recommended_title">Popular Attractions</h3>
            <div class="recommend_module_usp_container d-flex">

                <div class="recommend_module_usp_container_col mr-3 d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Flexibooking available</p>
                </div>
                <div class="recommend_module_usp_container_col mr-3  d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Price Drop Alerts</p>
                </div>

                <div class="recommend_module_usp_container_col mr-3  d-flex align-content-center align-items-center">
                    <img src="./assets/images/0AS2j120009gxknwsA052.webp" alt="">
                    <p>Flexibooking available</p>
                </div>

            </div>

            <div class="  tab_item_container">
                @foreach (App\Models\paTag::all() as $data )
                <span class="tab_item" id="pat_{{$data->id}}">{{$data->tag}}</span>
                @endforeach

            </div>

            <div class="new_recommend_list_container">
                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://www.usatoday.com/gcdn/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg?width=660&height=373&fit=crop&format=pjpg&auto=webp" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">Discover the timeless city with Touristanbul of Turkish Airlines</div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"><b class="text-muted">From</b> <img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>

                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://media.istockphoto.com/id/487042276/photo/hotel-sign.jpg?s=612x612&w=0&k=20&c=DjEVAoFnjB2cWwX28cxSKWkxsbze7o9jgkYrhyfmq9E=" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">iclub Fortress Hill Hotel</div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"> <b class="text-muted">From</b><img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>

                <div class="new_recommend_list_col">
                    <div class="new_recommend_img">
                        <img src="https://media.istockphoto.com/id/1165384568/photo/europe-modern-complex-of-residential-buildings.jpg?s=612x612&w=0&k=20&c=iW4NBiMPKEuvaA7h8wIsPHikhS64eR-5EVPfjQ9GPOA=" alt="">
                    </div>

                    <div class="new_recommend_text_container">
                        <div class="new_recommend_title">Parasailing at FunFest Beach</div>
                        <div class="new_recommend_star_mark d-flex">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>

                        </div>
                        <div class="new_recommend_star_count"><span><b>4.1</b>/5</span>3803 reviews</div>
                        <div class="new_recommend_currency_mark"><b class="text-muted">From</b>  <img style="width: 15px; height:15px;" src="./assets/images/currency-removebg-preview.png" alt="">320</div>
                    </div>
                </div>
                <div class="new_recommend_list_col position-relative">
                    <div class="new_recommend_more_card_img">
                        <img src="https://media.istockphoto.com/id/528487340/photo/beach-living-on-sea-view.jpg?s=612x612&w=0&k=20&c=-txUQWbvHNG6jOAPQrduesK9foBw8hQid6f3Y2GnwYo=" alt="">
                    </div>

                    <div class="new_recommend_more_card_btn position-absolute ">
                        <h4>Discover great deals on hotels around the world</h4>
                        <button class="btn btn-block btn-primary">Go Now</button>
                    </div>

                   
                </div>


            </div>
        </div>
    </section>

    <section class="quation_and_answare_section mb-5">
        <div class="question_and_answare_container ">
            <h3 class="font-weight-bold " style="color: #0f294d;font-weight: bold;  letter-spacing: 0px;">How to Book Cheap Flights?</h3>
            <div class="question_and_answare_row">
               
               <div class="accordion" id="accordionExample">
                @foreach (App\Models\FAQModel::all() as $data )
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$data->id}}" aria-expanded="false" aria-controls="collapse{{$data->id}}">
                   {{$data->question}}
                    </button>
                  </h2>
                  <div id="collapse{{$data->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{$data->answer}}</p>
                      
                    </div>
                  </div>
                </div>
                @endforeach
                
               
                 
                

              </div>
            </div>
        </div>
    </section>

    <section class="popular_destination_section mb-5">

        <div class="popular_destination_row">
        <h3>Popular Destination</h3>
        <div class="popular_destination_row">
            <div class="popular_destination_btn_container  justify-content-between">
                @foreach (App\Models\popular_destination_tag::all() as $data )
                <div class="popular_destination_btn">{{$data->tag}}</div>
                @endforeach
            </div>
            <div class="popular_destination_col">
            @foreach (App\Models\popularDestination::all() as $data )
            <div class="popular_destination_item"><a href="" >{{$data->slug}}</a></div>
            @endforeach
           
        </div>
        </div>

        </div>


        </div>
    </section>

    <section class="atol_protection">
        <div class="atol_protection_container">
            <div class="atol_header d-flex justify-content-center align-items-center">
                <img style="width: 1rem;height: 1rem;" src="https://ak-s.tripcdn.com/modules/ibu/flight-online-web/modules/ATOL_LOGO@3x.fd36d7a900.png" alt="">
                <h2>ATOL Protection</h2>
            </div>

            <div class="atol_text">
                {{strip_tags(App\Models\atol_protection::all()[0]->atol)}}
            </div>
                            
        </div>
       
    </section>

    <hr>

</main>
@endsection