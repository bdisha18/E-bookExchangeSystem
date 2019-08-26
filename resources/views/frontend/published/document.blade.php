@extends('frontend.layout.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="cr-container">			

	<!-- radio buttons and labels -->
	<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
	<label for="select-img-1" class="cr-label-img-1">1</label>

	<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
	<label for="select-img-2" class="cr-label-img-2">2</label>

	<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
	<label for="select-img-3" class="cr-label-img-3">3</label>

	<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
	<label for="select-img-4" class="cr-label-img-4">4</label>

	<div class="clr"></div>	


	<!-- panels -->
	<div class="cr-bgimg">
		<div>
			<span>Slice 1 - Image 1</span>
			<span>Slice 1 - Image 2</span>
			<span>Slice 1 - Image 3</span>
			<span>Slice 1 - Image 4</span>
		</div>
		<div>
			<span>Slice 2 - Image 1</span>
			<span>Slice 2 - Image 2</span>
			<span>Slice 2 - Image 3</span>
			<span>Slice 2 - Image 4</span>
		</div>
		<div>
			<span>Slice 3 - Image 1</span>
			<span>Slice 3 - Image 2</span>
			<span>Slice 3 - Image 3</span>
			<span>Slice 3 - Image 4</span>
		</div>
		<div>
			<span>Slice 4 - Image 1</span>
			<span>Slice 4 - Image 2</span>
			<span>Slice 4 - Image 3</span>
			<span>Slice 4 - Image 4</span>
		</div>
	</div>

	<!-- titles -->
	<div class="cr-titles">
		<h3>
			<span>Serendipity</span>
			<span>What you've been dreaming of</span>
		</h3>
		<h3>
			<span>Adventure</span>
			<span>Where the fun begins</span>
		</h3>
		<h3>
			<span>Nature</span>
			<span>Unforgettable eperiences</span>
		</h3>
		<h3>
			<span>Serenity</span>
			<span>When silence touches nature</span>
		</h3>
	</div>
</section>
		<div class="upload-title">
		<h1>Publish To The World</h1>
		<p>Presentations, research papers, legal documents, excel Sheets and more</p>
		
			<form class="publish-form" method="post" action="{{route('publish.store')}} " enctype="multipart/form-data">
				@csrf
                      <div class="row">
                                <div class="form-group col-md-6 publish-input-field">
                                    <input type="text" name="title" class=" publish-input" placeholder="Enter Document Title">
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <textarea  name="description" class=" publish-textarea" rows="6" placeholder="Details of Document"></textarea>
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                  <div class="form-group col-md-6 publish-input-field">
                            	<div class= upload-border>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn publish-upload-button">Upload a file</button>
                                        <input type="file" name="file" />
                                        <p>Drag & Drop File</p>
                                      </div>
                                    <div class="text-danger">{{ $errors->first('file') }}</div>
                                </div>
                         <p>Supported file types: pdf, txt, doc, ppt, xls, docx, and more</p>
                            </div>
                         </div>
                          <div class="form-group">
                            <button type="submit" class="publish-submit-btn"><b>Upload</b></button>
                        </div>
                    </form>
                </div>
		</div>
	</div>
</div>

@stop