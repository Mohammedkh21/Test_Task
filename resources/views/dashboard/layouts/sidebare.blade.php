<div class="col-lg-2  col-3 sid d-inline-flex align-items-start flex-column position-sticky top-0" style="background-color: #F8F8F8">
    <div class="text-right mb-auto  w-100" style="line-height: 3rem;">
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid" src="{{ asset('./assets/img/logo-50.png') }}" alt="">
                </div>
                <p class="d-inline text-black-70">موّل مشترياتك</p>
            </a>
        </div>
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/solar_cart-large-minimalistic-linear.png') }}" alt="">
                </div>
                <p class="d-inline text-green">المشتريات</p>
            </a>
        </div>
        <div class="">
            <a href="#" class="text-decoration-none ">
                <div class="d-inline  ">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/solar_card-linear.png') }}"  alt="">
                </div>
                <p class="d-inline text-black-70 m-0 p-0 ">معلومات الدفع</p>
            </a>
        </div>
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/fluent_person-money-24-regular.png') }}"  alt="">
                </div>
                <p class="d-inline text-black-70">الموردين</p>
            </a>
        </div>
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/solar_card-2-linear.png') }}"  alt="">
                </div>
                <p class="d-inline text-black-70">معلوماتي</p>
            </a>
        </div>
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/solar_chat-round-dots-linear.png') }}"  alt="">
                </div>
                <p class="d-inline text-black-70">الشكاوي</p>
            </a>
        </div>
        <div class="list-line"></div>
        <div>
            <a href="#" class="text-decoration-none ">
                <div class="d-inline ml-2">
                    <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/info.png') }}"  alt="">
                </div>
                <p class="d-inline text-black-70 ">عن ثمار</p>
                <div class="d-inline-flex align-items-center">
                    <i class="fa-solid fa-chevron-down text-black-70 font-size-14-px info-arrow"  ></i>
                </div>
            </a>
        </div>

    </div>
    <div class="h-auto d-flex align-items-end">
        <div class="mb-5">
            <form method="POST" action="{{ route('logout') }}"  class="text-decoration-none ">
                @csrf
                <button class="border-0 bg-transparent">
                    <div class="d-inline ml-2">
                        <img class="img-fluid img-24-24" src=" {{ asset('./assets/img/ri_logout-circle-r-line.png') }}" alt="">
                    </div>
                    <p class="d-inline text-red ">تسجيل خروج</p>
                </button>
            </form>
        </div>
    </div>
</div>
