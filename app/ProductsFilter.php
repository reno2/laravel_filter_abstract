<?php

namespace  App;

class ProductsFilter extends FilterBase {

		protected $builder;
		protected $request;

		public function __construct($builder, $request)
		{
				$this->request = $request;
				$this->builder = $builder;
		}

		public function filters(){
				return $this->request->all();
		}

		public function apply(){
				foreach($this->filters() as $filter => $value){
						if(method_exists($this, 'method_'.$filter)){
								$name = 'method_'.$filter;
								$this->$name($value);
						}
				}

				return $this->builder;
		}

		public function method_birthday($value){
				if(! $value) return;
				$this->builder->whereHas('info', function($query) use ($value){
						$query->where('birthday', '>', $value);
				});
		}

		public function method_is_active($value){
				$this->builder->where('is_active', $value);
		}

		public function method_gender($value){
				$this->builder->where('gender', $value);
		}

		public function method_name($value){
				$this->builder->where('name', 'like', "%$value%");
		}
}