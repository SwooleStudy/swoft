<?php

namespace App\Models\Entity;

use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Model;
use Swoft\Db\Types;

/**
 * 用户实体
 *
 * @Entity()
 * @Table(name="users")
 * @uses      User
 * @version   2017年08月23日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Users extends Model
{
    /**
     * 主键ID
     *
     * @Id()
     * @Column(name="id", type=Types::INT)
     * @var null|int
     */
    private $id;

    /**
     * 名称
     *
     * @Column(name="name", type=Types::STRING)
     * @Required()
     * @var string
     */
    private $name;

    /**
     * email
     *
     * @Column(name="email", type=Types::STRING)
     * @Required()
     * @var string
     */
    private $email;

    /**
     * password
     *
     * @Column(name="password", type=Types::STRING,length=60)
     * @Required()
     * @var string
     */
    private $password;

    /**
     * 描述
     *
     * @Column(name="created_at", type="datetime")
     * @var string
     */
    private $created_at = "";

    /**
     * 描述
     *
     * @Column(name="updated_at", type="datetime")
     * @var string
     */
    private $updated_at = "";

    /**
     * 非数据库字段，未定义映射关系
     *
     * @var mixed
     */
    private $otherProperty;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $options = [
            'cost' => 12,
        ];
        $this->password = password_hash($password, PASSWORD_BCRYPT, $options);
    }

    /**
     * @return mixed
     */
    public function getOtherProperty()
    {
        return $this->otherProperty;
    }

    /**
     * @param mixed $otherProperty
     */
    public function setOtherProperty($otherProperty)
    {
        $this->otherProperty = $otherProperty;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }

}
