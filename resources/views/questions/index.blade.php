@extends('layouts.master')

@section('title')
	{{ $title }}
@endsection

@section('content')
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-3">
				<p>
					Are you have questions ? Just type in the right box.
				</p>
			</div>
			<div class="col-sm-9">
				<form action="questions" method="post">
					<div class="form-group">
						<label for="">Type your title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Describe your question here!</label>
						<textarea name="body" rows="8" cols="40" class="form-control"></textarea>
					</div>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="submit" value="Submit" class="btn btn-primary">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<h2>Top 5 Questions</h2>
				<ul>
					<li>Question 1</li>
					<li>Question 2</li>
					<li>Question 3</li>
					<li>Question 4</li>
					<li>Question 5</li>
				</ul>
			</div>
			<div class="col-sm-9">
			    @if ( !$questions->count() )
			        You have no questions
			    @else
		        <div class="row">
		            @foreach( $questions as $question )
		                <div class="item-question">
							<div class="question-head">
								<div class="col-sm-9">
									<a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
									<div class="question-body">
										{{ $question->body }}
									</div>
								</div>
								<div class="col-sm-3">
									<form action="{{url('questions/' . $question->id)}}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button type="submit" id="delete-question-{{ $question->id }}" title="Delete question!" class="btn btn-danger">
											<i class="glyphicon glyphicon-trash"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
		            @endforeach
		        </div>
			    @endif
			</div>
		</div>
	</div>
@endsection
