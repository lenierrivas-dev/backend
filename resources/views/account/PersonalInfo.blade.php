@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>

@endsection

@section('content')

	<section class="entero">
        <div class="medio-two">
			<div class="section-perfil_info">
			    <main class="section-perfil_info-main">
			        <div class="_flex-right16">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a>
		            	<i class="fas fa-chevron-right"></i>
		            	<span class="_txtecbold16">Personal info</span>
			        </div>
			        <h2 class="h2-guests_bold35">Personal info</h2>

			        <div>
			        	{{-- Input Name --}}
			        	@livewire('account.personal.name')

			        	{{-- Input Gender --}}
			        	@livewire('account.personal.gender')

			        	{{-- Input DateBirth --}}
			        	@livewire('account.personal.datebirth')

			        	{{-- Input Email --}}
			        	@livewire('account.personal.email')

			        	{{-- Input Phone --}}
			        	@livewire('account.personal.phone')

			        	{{-- Input Phone --}}
			        	@livewire('account.personal.governid')

			        	{{-- Input Address --}}
			        	@livewire('account.personal.address')

			        	{{-- Input Address --}}
			        	@livewire('account.personal.emergency')
			        </div>
			    </main>

			    <aside class="section-perfil_info-aside">
			        <div class="_cont-account">
			            <i class="far fa-edit"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">Which details can be edited?</div>
			            <p class="span-guests">Details vvoutlet  uses to verify your identity can't be changed. Contact info and some personal details can be edited, but we may ask you verify your identity the next time you book or create a listing.</p>
			        </div>

			        <div class="_cont-account">
			            <i class="far fa-address-card"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">What info is shared with others?</div>
			            <p class="span-guests">vvoutlet only releases contact information for Hosts and guests after a reservation is confirmed.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

@endsection
