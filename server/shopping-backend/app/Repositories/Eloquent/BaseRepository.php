<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class BaseRepository
{

    public function __construct(
        protected readonly Model $model
    ) {

    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $user = $this->model->first($id);
        $user->update($data);

        return $user->fresh();
    }

    public function delete(int $id)
    {
        return $this->model->delete($id);
    }

    public function paginate(int $perpage)
    {
        return $this->model->paginate($perpage);
    }

    public function checkIsExists(int|array $id)
    {
        $isExists = false;
        // checking if id is array 
        if (is_array($id)) {
            // then loop 
            foreach ($id as $modelId) {
                // if found make exists true
                $model = $this->model->find($modelId);
                if ($model)
                    $isExists = true;
            }

            return $isExists;
        }
        return boolval($this->model->find($id));
    }

    protected function format(array $data)
    {
        $save_copy = [];

        foreach ($data as $key => $value) {
            $save_copy[Str::snake($key)] = $value;
        }

        return $save_copy;
    }
}

?>