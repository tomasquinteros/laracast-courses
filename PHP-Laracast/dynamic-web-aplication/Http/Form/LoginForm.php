<?php

    namespace Http\Form;

    use Core\Validator;
    use Core\ValidationException;

    class LoginForm
    {

        protected array $errors = [];

        public function __construct(public array $attributes)
        {
            if ( ! Validator::email($attributes['email'])) {
                $this->errors['email'] = 'Email is required, please enter your email';
            }
            if ( ! Validator::string($attributes['password'], 7, 255)) {
                $this->errors['password'] = 'The password must be more than 7 characters';
            }
        }

        public static function validate($attributes): static
        {
            $instance = new static($attributes);

            return $instance->failed() ? $instance->throw() : $instance;
        }

        public function throw(): void
        {
            ValidationException::throw($this->getErrors(), $this->attributes);
        }

        public function failed(): int
        {
            return count($this->getErrors());
        }

        public function getErrors(): array
        {
            return $this->errors;
        }

        public function error($field, $message): static
        {
            $this->errors[$field] = $message;

            return $this;
        }

    }