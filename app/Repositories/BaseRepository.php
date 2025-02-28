<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository as EloquentBaseRepository;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository extends EloquentBaseRepository
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function insert(array $attributes)
    {
        return $this->model->insert($attributes);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function insertGetId(array $attributes)
    {
        return $this->model->insertGetId($attributes);
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->model->getTable();
    }

    /**
     * @param array $attribute
     * @param array $arrId
     * @return mixed
     */
    public function updates(array $attribute, array $arrId)
    {
        return $this->model->whereIn('id', $arrId)->update($attribute);
    }

    public function updateWhere(array $condition, array $attribute)
    {
        $query = $this->model;
        foreach ($condition as $k => $v) {
            if (is_string($k)) {
                if (is_array($v)){
                    $query = $query->whereIn($k, $v);
                }else{
                    $query = $query->where($k, $v);
                }
            } else {
                if (!empty($v)) {
                    $query = $query->where($v[0], $v[1], $v[1] == 'like' ? '%' . $v[2] . '%' : $v[2]);
                }
            }
        }
        return $query->update($attribute);
    }
}
