<?php


/**
 * Base class that represents a row from the 'table1' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTable1 extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'Table1Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Table1Peer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the user field.
     * @var        string
     */
    protected $user;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * @var        PropelObjectCollection|Table1HasTable1[] Collection to store aggregation of Table1HasTable1 objects.
     */
    protected $collTable1HasTable1sRelatedByTable1Id;

    /**
     * @var        PropelObjectCollection|Table1HasTable1[] Collection to store aggregation of Table1HasTable1 objects.
     */
    protected $collTable1HasTable1sRelatedByTable1Id1;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $table1HasTable1sRelatedByTable1IdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $table1HasTable1sRelatedByTable1Id1ScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     * 
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [user] column value.
     * 
     * @return   string
     */
    public function getUser()
    {

        return $this->user;
    }

    /**
     * Get the [password] column value.
     * 
     * @return   string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   Table1 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = Table1Peer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user] column.
     * 
     * @param      string $v new value
     * @return   Table1 The current object (for fluent API support)
     */
    public function setUser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user !== $v) {
            $this->user = $v;
            $this->modifiedColumns[] = Table1Peer::USER;
        }


        return $this;
    } // setUser()

    /**
     * Set the value of [password] column.
     * 
     * @param      string $v new value
     * @return   Table1 The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = Table1Peer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->user = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = Table1Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Table1 object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(Table1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Table1Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collTable1HasTable1sRelatedByTable1Id = null;

            $this->collTable1HasTable1sRelatedByTable1Id1 = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(Table1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Table1Query::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTable1:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTable1:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(Table1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTable1:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTable1:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                Table1Peer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->table1HasTable1sRelatedByTable1IdScheduledForDeletion !== null) {
                if (!$this->table1HasTable1sRelatedByTable1IdScheduledForDeletion->isEmpty()) {
                    Table1HasTable1Query::create()
                        ->filterByPrimaryKeys($this->table1HasTable1sRelatedByTable1IdScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion = null;
                }
            }

            if ($this->collTable1HasTable1sRelatedByTable1Id !== null) {
                foreach ($this->collTable1HasTable1sRelatedByTable1Id as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion !== null) {
                if (!$this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion->isEmpty()) {
                    Table1HasTable1Query::create()
                        ->filterByPrimaryKeys($this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion = null;
                }
            }

            if ($this->collTable1HasTable1sRelatedByTable1Id1 !== null) {
                foreach ($this->collTable1HasTable1sRelatedByTable1Id1 as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = Table1Peer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . Table1Peer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(Table1Peer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(Table1Peer::USER)) {
            $modifiedColumns[':p' . $index++]  = '`USER`';
        }
        if ($this->isColumnModified(Table1Peer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`PASSWORD`';
        }

        $sql = sprintf(
            'INSERT INTO `table1` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`USER`':
						$stmt->bindValue($identifier, $this->user, PDO::PARAM_STR);
                        break;
                    case '`PASSWORD`':
						$stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
			$pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = Table1Peer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTable1HasTable1sRelatedByTable1Id !== null) {
                    foreach ($this->collTable1HasTable1sRelatedByTable1Id as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTable1HasTable1sRelatedByTable1Id1 !== null) {
                    foreach ($this->collTable1HasTable1sRelatedByTable1Id1 as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = Table1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getUser();
                break;
            case 2:
                return $this->getPassword();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Table1'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Table1'][$this->getPrimaryKey()] = true;
        $keys = Table1Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUser(),
            $keys[2] => $this->getPassword(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collTable1HasTable1sRelatedByTable1Id) {
                $result['Table1HasTable1sRelatedByTable1Id'] = $this->collTable1HasTable1sRelatedByTable1Id->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTable1HasTable1sRelatedByTable1Id1) {
                $result['Table1HasTable1sRelatedByTable1Id1'] = $this->collTable1HasTable1sRelatedByTable1Id1->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = Table1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setUser($value);
                break;
            case 2:
                $this->setPassword($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = Table1Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUser($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPassword($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Table1Peer::DATABASE_NAME);

        if ($this->isColumnModified(Table1Peer::ID)) $criteria->add(Table1Peer::ID, $this->id);
        if ($this->isColumnModified(Table1Peer::USER)) $criteria->add(Table1Peer::USER, $this->user);
        if ($this->isColumnModified(Table1Peer::PASSWORD)) $criteria->add(Table1Peer::PASSWORD, $this->password);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(Table1Peer::DATABASE_NAME);
        $criteria->add(Table1Peer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Table1 (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUser($this->getUser());
        $copyObj->setPassword($this->getPassword());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTable1HasTable1sRelatedByTable1Id() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTable1HasTable1RelatedByTable1Id($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTable1HasTable1sRelatedByTable1Id1() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTable1HasTable1RelatedByTable1Id1($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 Table1 Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return   Table1Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Table1Peer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Table1HasTable1RelatedByTable1Id' == $relationName) {
            $this->initTable1HasTable1sRelatedByTable1Id();
        }
        if ('Table1HasTable1RelatedByTable1Id1' == $relationName) {
            $this->initTable1HasTable1sRelatedByTable1Id1();
        }
    }

    /**
     * Clears out the collTable1HasTable1sRelatedByTable1Id collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTable1HasTable1sRelatedByTable1Id()
     */
    public function clearTable1HasTable1sRelatedByTable1Id()
    {
        $this->collTable1HasTable1sRelatedByTable1Id = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collTable1HasTable1sRelatedByTable1Id collection.
     *
     * By default this just sets the collTable1HasTable1sRelatedByTable1Id collection to an empty array (like clearcollTable1HasTable1sRelatedByTable1Id());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTable1HasTable1sRelatedByTable1Id($overrideExisting = true)
    {
        if (null !== $this->collTable1HasTable1sRelatedByTable1Id && !$overrideExisting) {
            return;
        }
        $this->collTable1HasTable1sRelatedByTable1Id = new PropelObjectCollection();
        $this->collTable1HasTable1sRelatedByTable1Id->setModel('Table1HasTable1');
    }

    /**
     * Gets an array of Table1HasTable1 objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Table1 is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Table1HasTable1[] List of Table1HasTable1 objects
     * @throws PropelException
     */
    public function getTable1HasTable1sRelatedByTable1Id($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collTable1HasTable1sRelatedByTable1Id || null !== $criteria) {
            if ($this->isNew() && null === $this->collTable1HasTable1sRelatedByTable1Id) {
                // return empty collection
                $this->initTable1HasTable1sRelatedByTable1Id();
            } else {
                $collTable1HasTable1sRelatedByTable1Id = Table1HasTable1Query::create(null, $criteria)
                    ->filterByTable1RelatedByTable1Id($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collTable1HasTable1sRelatedByTable1Id;
                }
                $this->collTable1HasTable1sRelatedByTable1Id = $collTable1HasTable1sRelatedByTable1Id;
            }
        }

        return $this->collTable1HasTable1sRelatedByTable1Id;
    }

    /**
     * Sets a collection of Table1HasTable1RelatedByTable1Id objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $table1HasTable1sRelatedByTable1Id A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setTable1HasTable1sRelatedByTable1Id(PropelCollection $table1HasTable1sRelatedByTable1Id, PropelPDO $con = null)
    {
        $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion = $this->getTable1HasTable1sRelatedByTable1Id(new Criteria(), $con)->diff($table1HasTable1sRelatedByTable1Id);

        foreach ($this->table1HasTable1sRelatedByTable1IdScheduledForDeletion as $table1HasTable1RelatedByTable1IdRemoved) {
            $table1HasTable1RelatedByTable1IdRemoved->setTable1RelatedByTable1Id(null);
        }

        $this->collTable1HasTable1sRelatedByTable1Id = null;
        foreach ($table1HasTable1sRelatedByTable1Id as $table1HasTable1RelatedByTable1Id) {
            $this->addTable1HasTable1RelatedByTable1Id($table1HasTable1RelatedByTable1Id);
        }

        $this->collTable1HasTable1sRelatedByTable1Id = $table1HasTable1sRelatedByTable1Id;
    }

    /**
     * Returns the number of related Table1HasTable1 objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Table1HasTable1 objects.
     * @throws PropelException
     */
    public function countTable1HasTable1sRelatedByTable1Id(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collTable1HasTable1sRelatedByTable1Id || null !== $criteria) {
            if ($this->isNew() && null === $this->collTable1HasTable1sRelatedByTable1Id) {
                return 0;
            } else {
                $query = Table1HasTable1Query::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByTable1RelatedByTable1Id($this)
                    ->count($con);
            }
        } else {
            return count($this->collTable1HasTable1sRelatedByTable1Id);
        }
    }

    /**
     * Method called to associate a Table1HasTable1 object to this object
     * through the Table1HasTable1 foreign key attribute.
     *
     * @param    Table1HasTable1 $l Table1HasTable1
     * @return   Table1 The current object (for fluent API support)
     */
    public function addTable1HasTable1RelatedByTable1Id(Table1HasTable1 $l)
    {
        if ($this->collTable1HasTable1sRelatedByTable1Id === null) {
            $this->initTable1HasTable1sRelatedByTable1Id();
        }
        if (!$this->collTable1HasTable1sRelatedByTable1Id->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddTable1HasTable1RelatedByTable1Id($l);
        }

        return $this;
    }

    /**
     * @param	Table1HasTable1RelatedByTable1Id $table1HasTable1RelatedByTable1Id The table1HasTable1RelatedByTable1Id object to add.
     */
    protected function doAddTable1HasTable1RelatedByTable1Id($table1HasTable1RelatedByTable1Id)
    {
        $this->collTable1HasTable1sRelatedByTable1Id[]= $table1HasTable1RelatedByTable1Id;
        $table1HasTable1RelatedByTable1Id->setTable1RelatedByTable1Id($this);
    }

    /**
     * @param	Table1HasTable1RelatedByTable1Id $table1HasTable1RelatedByTable1Id The table1HasTable1RelatedByTable1Id object to remove.
     */
    public function removeTable1HasTable1RelatedByTable1Id($table1HasTable1RelatedByTable1Id)
    {
        if ($this->getTable1HasTable1sRelatedByTable1Id()->contains($table1HasTable1RelatedByTable1Id)) {
            $this->collTable1HasTable1sRelatedByTable1Id->remove($this->collTable1HasTable1sRelatedByTable1Id->search($table1HasTable1RelatedByTable1Id));
            if (null === $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion) {
                $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion = clone $this->collTable1HasTable1sRelatedByTable1Id;
                $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion->clear();
            }
            $this->table1HasTable1sRelatedByTable1IdScheduledForDeletion[]= $table1HasTable1RelatedByTable1Id;
            $table1HasTable1RelatedByTable1Id->setTable1RelatedByTable1Id(null);
        }
    }

    /**
     * Clears out the collTable1HasTable1sRelatedByTable1Id1 collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTable1HasTable1sRelatedByTable1Id1()
     */
    public function clearTable1HasTable1sRelatedByTable1Id1()
    {
        $this->collTable1HasTable1sRelatedByTable1Id1 = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collTable1HasTable1sRelatedByTable1Id1 collection.
     *
     * By default this just sets the collTable1HasTable1sRelatedByTable1Id1 collection to an empty array (like clearcollTable1HasTable1sRelatedByTable1Id1());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTable1HasTable1sRelatedByTable1Id1($overrideExisting = true)
    {
        if (null !== $this->collTable1HasTable1sRelatedByTable1Id1 && !$overrideExisting) {
            return;
        }
        $this->collTable1HasTable1sRelatedByTable1Id1 = new PropelObjectCollection();
        $this->collTable1HasTable1sRelatedByTable1Id1->setModel('Table1HasTable1');
    }

    /**
     * Gets an array of Table1HasTable1 objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Table1 is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Table1HasTable1[] List of Table1HasTable1 objects
     * @throws PropelException
     */
    public function getTable1HasTable1sRelatedByTable1Id1($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collTable1HasTable1sRelatedByTable1Id1 || null !== $criteria) {
            if ($this->isNew() && null === $this->collTable1HasTable1sRelatedByTable1Id1) {
                // return empty collection
                $this->initTable1HasTable1sRelatedByTable1Id1();
            } else {
                $collTable1HasTable1sRelatedByTable1Id1 = Table1HasTable1Query::create(null, $criteria)
                    ->filterByTable1RelatedByTable1Id1($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collTable1HasTable1sRelatedByTable1Id1;
                }
                $this->collTable1HasTable1sRelatedByTable1Id1 = $collTable1HasTable1sRelatedByTable1Id1;
            }
        }

        return $this->collTable1HasTable1sRelatedByTable1Id1;
    }

    /**
     * Sets a collection of Table1HasTable1RelatedByTable1Id1 objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $table1HasTable1sRelatedByTable1Id1 A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setTable1HasTable1sRelatedByTable1Id1(PropelCollection $table1HasTable1sRelatedByTable1Id1, PropelPDO $con = null)
    {
        $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion = $this->getTable1HasTable1sRelatedByTable1Id1(new Criteria(), $con)->diff($table1HasTable1sRelatedByTable1Id1);

        foreach ($this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion as $table1HasTable1RelatedByTable1Id1Removed) {
            $table1HasTable1RelatedByTable1Id1Removed->setTable1RelatedByTable1Id1(null);
        }

        $this->collTable1HasTable1sRelatedByTable1Id1 = null;
        foreach ($table1HasTable1sRelatedByTable1Id1 as $table1HasTable1RelatedByTable1Id1) {
            $this->addTable1HasTable1RelatedByTable1Id1($table1HasTable1RelatedByTable1Id1);
        }

        $this->collTable1HasTable1sRelatedByTable1Id1 = $table1HasTable1sRelatedByTable1Id1;
    }

    /**
     * Returns the number of related Table1HasTable1 objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Table1HasTable1 objects.
     * @throws PropelException
     */
    public function countTable1HasTable1sRelatedByTable1Id1(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collTable1HasTable1sRelatedByTable1Id1 || null !== $criteria) {
            if ($this->isNew() && null === $this->collTable1HasTable1sRelatedByTable1Id1) {
                return 0;
            } else {
                $query = Table1HasTable1Query::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByTable1RelatedByTable1Id1($this)
                    ->count($con);
            }
        } else {
            return count($this->collTable1HasTable1sRelatedByTable1Id1);
        }
    }

    /**
     * Method called to associate a Table1HasTable1 object to this object
     * through the Table1HasTable1 foreign key attribute.
     *
     * @param    Table1HasTable1 $l Table1HasTable1
     * @return   Table1 The current object (for fluent API support)
     */
    public function addTable1HasTable1RelatedByTable1Id1(Table1HasTable1 $l)
    {
        if ($this->collTable1HasTable1sRelatedByTable1Id1 === null) {
            $this->initTable1HasTable1sRelatedByTable1Id1();
        }
        if (!$this->collTable1HasTable1sRelatedByTable1Id1->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddTable1HasTable1RelatedByTable1Id1($l);
        }

        return $this;
    }

    /**
     * @param	Table1HasTable1RelatedByTable1Id1 $table1HasTable1RelatedByTable1Id1 The table1HasTable1RelatedByTable1Id1 object to add.
     */
    protected function doAddTable1HasTable1RelatedByTable1Id1($table1HasTable1RelatedByTable1Id1)
    {
        $this->collTable1HasTable1sRelatedByTable1Id1[]= $table1HasTable1RelatedByTable1Id1;
        $table1HasTable1RelatedByTable1Id1->setTable1RelatedByTable1Id1($this);
    }

    /**
     * @param	Table1HasTable1RelatedByTable1Id1 $table1HasTable1RelatedByTable1Id1 The table1HasTable1RelatedByTable1Id1 object to remove.
     */
    public function removeTable1HasTable1RelatedByTable1Id1($table1HasTable1RelatedByTable1Id1)
    {
        if ($this->getTable1HasTable1sRelatedByTable1Id1()->contains($table1HasTable1RelatedByTable1Id1)) {
            $this->collTable1HasTable1sRelatedByTable1Id1->remove($this->collTable1HasTable1sRelatedByTable1Id1->search($table1HasTable1RelatedByTable1Id1));
            if (null === $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion) {
                $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion = clone $this->collTable1HasTable1sRelatedByTable1Id1;
                $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion->clear();
            }
            $this->table1HasTable1sRelatedByTable1Id1ScheduledForDeletion[]= $table1HasTable1RelatedByTable1Id1;
            $table1HasTable1RelatedByTable1Id1->setTable1RelatedByTable1Id1(null);
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user = null;
        $this->password = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collTable1HasTable1sRelatedByTable1Id) {
                foreach ($this->collTable1HasTable1sRelatedByTable1Id as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTable1HasTable1sRelatedByTable1Id1) {
                foreach ($this->collTable1HasTable1sRelatedByTable1Id1 as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collTable1HasTable1sRelatedByTable1Id instanceof PropelCollection) {
            $this->collTable1HasTable1sRelatedByTable1Id->clearIterator();
        }
        $this->collTable1HasTable1sRelatedByTable1Id = null;
        if ($this->collTable1HasTable1sRelatedByTable1Id1 instanceof PropelCollection) {
            $this->collTable1HasTable1sRelatedByTable1Id1->clearIterator();
        }
        $this->collTable1HasTable1sRelatedByTable1Id1 = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(Table1Peer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseTable1:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseTable1
