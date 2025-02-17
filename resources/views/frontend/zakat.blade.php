@extends('frontend.layouts.app')

@section('title', 'Zakat')

@push('header')
<!-- extra header -->
@endpush

@section('section')


    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.webp') }}" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Zakat</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/index">Home</a></li>
                    <li>Zakat</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
   
 
<div class="container my-5">
    <div class="zakat-container">
        <h2>Zakat - A Divine Obligation</h2>
        <p><strong>Zakat</strong> is an Islamic obligation that is mandatory for those who meet the eligibility criteria. It is not just charity but a form of worship that purifies one's wealth and helps in social welfare.</p>

        <h3 class="section-title">Importance of Zakat</h3>
        <p>Zakat is one of the five pillars of Islam. It is emphasized in the Quran and Hadith multiple times. Allah says in the Quran:</p>
        <blockquote>
            <em>"And establish prayer and give Zakat, and whatever good you put forward for yourselves – you will find it with Allah." (Al-Baqarah 2:110)</em>
        </blockquote>

        <h3 class="section-title">Benefits of Giving Zakat</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">✔ Helps the poor and needy.</li>
            <li class="list-group-item">✔ Promotes fairness and social justice.</li>
            <li class="list-group-item">✔ Brings blessings and increases wealth.</li>
            <li class="list-group-item">✔ Purifies the heart from greed and attachment to wealth.</li>
            <li class="list-group-item">✔ Leads to Allah's mercy and rewards in the Hereafter.</li>
        </ul>

        <h3 class="section-title">Who Should Pay Zakat?</h3>
        <p>Zakat is obligatory for those who are considered <strong>Sahib-e-Nisab</strong> (wealthy enough to meet the threshold). The criteria include:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">✔ Possession of <strong>7.5 tola (87.5 grams) of gold</strong> or <strong>52.5 tola (612 grams) of silver</strong> or equivalent wealth.</li>
            <li class="list-group-item">✔ This wealth must remain in possession for a full Islamic year.</li>
            <li class="list-group-item">✔ The person must not have significant debts that reduce their wealth below the Nisab threshold.</li>
        </ul>

        <h3 class="section-title">Who Can Receive Zakat?</h3>
        <p>Zakat can only be given to specific categories of people as mentioned in the Quran:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">✔ The poor and needy.</li>
            <li class="list-group-item">✔ Those who are extremely destitute.</li>
            <li class="list-group-item">✔ Those in debt and unable to repay.</li>
            <li class="list-group-item">✔ New Muslims who need support in their faith.</li>
            <li class="list-group-item">✔ Those striving in the path of Allah.</li>
            <li class="list-group-item">✔ Stranded travelers who are in distress.</li>
            <li class="list-group-item">✔ Administrators responsible for collecting and distributing Zakat.</li>
        </ul>

        <h3 class="section-title">How Much Zakat to Pay?</h3>
        <p>If you meet the Nisab criteria, you must pay <strong>2.5%</strong> of your total wealth as Zakat. This applies to gold, silver, savings, and other assets but not to personal-use items like clothing and household goods.</p>

        <h3 class="section-title">Purpose of Zakat</h3>
        <p>Zakat is not just a financial duty; it is a system designed to reduce poverty and balance wealth distribution in society. It promotes social welfare, empathy, and justice.</p>

        <a href="/donate?for=Zakat" class="btn donate-btn mt-4">Donate Now</a>
    </div>
</div>


@endsection
@push('js')
@endpush