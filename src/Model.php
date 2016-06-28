<?php

namespace Application;

class Model
{
    const ERR_ID_NOT_INT = 'Cannot set the model::id value to a non-integer';

    /**
     * Holder for all of the model's data values.
     *
     * @var array
     */
    protected $data;

    /**
     * Constructor for the model isntance.
     *
     * @param array $data
     *   Set the model's data property with these values.
     */
    public function __construct($data = [])
    {
        $defaults = [
            'id' => null,
        ];

        $this->data = array_merge($defaults, $data);
    }

    /**
     * Getter for the Model's id value.
     *
     * @return int
     *   The model id.
     */
    public function getId()
    {
        return $this->data['id'];
    }

    /**
     * Setter for the Model's id value.
     *
     * @param int $id
     *   What to set the model's id value to
     *
     * @return Model
     *   Return's this, for object-chaining.
     */
    public function setId($id)
    {
        if (!is_int($id)) {
            throw new ErrorException(self::ERR_ID_NOT_INT);
        }

        $this->data['id'] = $id;

        return $this;
    }
}