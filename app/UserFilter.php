<?php

namespace  App;

class UserFilter extends FilterBase {


		public function method_birthday($value){
				if(! $value) return;
				$this->builder->whereHas('info', function($query) use ($value){
						$query->where('birthday', '>', $value);
				});
		}

		public function method_is_active($value){

				if(! $value) return;
				if($value == 'true') $this->builder->where('is_active', true);
				else $this->builder->where('is_active', false);
		}

		public function method_gender($value){
				$this->builder->where('gender', $value);
		}

		public function method_name($value){
				$this->builder->where('name', 'like', "%$value%");
		}
}