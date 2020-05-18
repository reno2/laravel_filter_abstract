<?php
namespace App;


use Illuminate\Http\Request;

abstract class FilterBase{
		protected $builder;
		protected $request;

		public function __construct(Request $request)
		{
				$this->request = $request;

		}

		public function filters(){
				return $this->request->all();
		}

		public function apply($builder){

				$this->builder = $builder;
				foreach($this->filters() as $filter => $value){
						if(method_exists($this, 'method_'.$filter)){
								$name = 'method_'.$filter;
								$this->$name($value);
						}
				}

				return $this->builder;
		}

}