<?php


/**
 * Base class that represents a row from the 'localidad' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLocalidad extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'LocalidadPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LocalidadPeer
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
     * The value for the descripcion field.
     * @var        string
     */
    protected $descripcion;

    /**
     * @var        PropelObjectCollection|Afiliado[] Collection to store aggregation of Afiliado objects.
     */
    protected $collAfiliados;

    /**
     * @var        PropelObjectCollection|Centroatencion[] Collection to store aggregation of Centroatencion objects.
     */
    protected $collCentroatencions;

    /**
     * @var        PropelObjectCollection|Prestador[] Collection to store aggregation of Prestador objects.
     */
    protected $collPrestadors;

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
    protected $afiliadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $centroatencionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $prestadorsScheduledForDeletion = null;

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
     * Get the [descripcion] column value.
     * 
     * @return   string
     */
    public function getDescripcion()
    {

        return $this->descripcion;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   Localidad The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = LocalidadPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [descripcion] column.
     * 
     * @param      string $v new value
     * @return   Localidad The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = LocalidadPeer::DESCRIPCION;
        }


        return $this;
    } // setDescripcion()

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
            $this->descripcion = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 2; // 2 = LocalidadPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Localidad object", $e);
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
            $con = Propel::getConnection(LocalidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LocalidadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAfiliados = null;

            $this->collCentroatencions = null;

            $this->collPrestadors = null;

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
            $con = Propel::getConnection(LocalidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LocalidadQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseLocalidad:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseLocalidad:delete:post') as $callable)
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
            $con = Propel::getConnection(LocalidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseLocalidad:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseLocalidad:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                LocalidadPeer::addInstanceToPool($this);
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

            if ($this->afiliadosScheduledForDeletion !== null) {
                if (!$this->afiliadosScheduledForDeletion->isEmpty()) {
                    AfiliadoQuery::create()
                        ->filterByPrimaryKeys($this->afiliadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->afiliadosScheduledForDeletion = null;
                }
            }

            if ($this->collAfiliados !== null) {
                foreach ($this->collAfiliados as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->centroatencionsScheduledForDeletion !== null) {
                if (!$this->centroatencionsScheduledForDeletion->isEmpty()) {
                    CentroatencionQuery::create()
                        ->filterByPrimaryKeys($this->centroatencionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->centroatencionsScheduledForDeletion = null;
                }
            }

            if ($this->collCentroatencions !== null) {
                foreach ($this->collCentroatencions as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->prestadorsScheduledForDeletion !== null) {
                if (!$this->prestadorsScheduledForDeletion->isEmpty()) {
                    PrestadorQuery::create()
                        ->filterByPrimaryKeys($this->prestadorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->prestadorsScheduledForDeletion = null;
                }
            }

            if ($this->collPrestadors !== null) {
                foreach ($this->collPrestadors as $referrerFK) {
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

        $this->modifiedColumns[] = LocalidadPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LocalidadPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LocalidadPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(LocalidadPeer::DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`DESCRIPCION`';
        }

        $sql = sprintf(
            'INSERT INTO `localidad` (%s) VALUES (%s)',
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
                    case '`DESCRIPCION`':
						$stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
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


            if (($retval = LocalidadPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAfiliados !== null) {
                    foreach ($this->collAfiliados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCentroatencions !== null) {
                    foreach ($this->collCentroatencions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPrestadors !== null) {
                    foreach ($this->collPrestadors as $referrerFK) {
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
        $pos = LocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDescripcion();
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
        if (isset($alreadyDumpedObjects['Localidad'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Localidad'][$this->getPrimaryKey()] = true;
        $keys = LocalidadPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getDescripcion(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collAfiliados) {
                $result['Afiliados'] = $this->collAfiliados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCentroatencions) {
                $result['Centroatencions'] = $this->collCentroatencions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPrestadors) {
                $result['Prestadors'] = $this->collPrestadors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = LocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDescripcion($value);
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
        $keys = LocalidadPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDescripcion($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LocalidadPeer::DATABASE_NAME);

        if ($this->isColumnModified(LocalidadPeer::ID)) $criteria->add(LocalidadPeer::ID, $this->id);
        if ($this->isColumnModified(LocalidadPeer::DESCRIPCION)) $criteria->add(LocalidadPeer::DESCRIPCION, $this->descripcion);

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
        $criteria = new Criteria(LocalidadPeer::DATABASE_NAME);
        $criteria->add(LocalidadPeer::ID, $this->id);

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
     * @param      object $copyObj An object of Localidad (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescripcion($this->getDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAfiliados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAfiliado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCentroatencions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCentroatencion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPrestadors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPrestador($relObj->copy($deepCopy));
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
     * @return                 Localidad Clone of current object.
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
     * @return   LocalidadPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LocalidadPeer();
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
        if ('Afiliado' == $relationName) {
            $this->initAfiliados();
        }
        if ('Centroatencion' == $relationName) {
            $this->initCentroatencions();
        }
        if ('Prestador' == $relationName) {
            $this->initPrestadors();
        }
    }

    /**
     * Clears out the collAfiliados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAfiliados()
     */
    public function clearAfiliados()
    {
        $this->collAfiliados = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collAfiliados collection.
     *
     * By default this just sets the collAfiliados collection to an empty array (like clearcollAfiliados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAfiliados($overrideExisting = true)
    {
        if (null !== $this->collAfiliados && !$overrideExisting) {
            return;
        }
        $this->collAfiliados = new PropelObjectCollection();
        $this->collAfiliados->setModel('Afiliado');
    }

    /**
     * Gets an array of Afiliado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Localidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     * @throws PropelException
     */
    public function getAfiliados($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAfiliados || null !== $criteria) {
            if ($this->isNew() && null === $this->collAfiliados) {
                // return empty collection
                $this->initAfiliados();
            } else {
                $collAfiliados = AfiliadoQuery::create(null, $criteria)
                    ->filterByLocalidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAfiliados;
                }
                $this->collAfiliados = $collAfiliados;
            }
        }

        return $this->collAfiliados;
    }

    /**
     * Sets a collection of Afiliado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $afiliados A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setAfiliados(PropelCollection $afiliados, PropelPDO $con = null)
    {
        $this->afiliadosScheduledForDeletion = $this->getAfiliados(new Criteria(), $con)->diff($afiliados);

        foreach ($this->afiliadosScheduledForDeletion as $afiliadoRemoved) {
            $afiliadoRemoved->setLocalidad(null);
        }

        $this->collAfiliados = null;
        foreach ($afiliados as $afiliado) {
            $this->addAfiliado($afiliado);
        }

        $this->collAfiliados = $afiliados;
    }

    /**
     * Returns the number of related Afiliado objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Afiliado objects.
     * @throws PropelException
     */
    public function countAfiliados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAfiliados || null !== $criteria) {
            if ($this->isNew() && null === $this->collAfiliados) {
                return 0;
            } else {
                $query = AfiliadoQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByLocalidad($this)
                    ->count($con);
            }
        } else {
            return count($this->collAfiliados);
        }
    }

    /**
     * Method called to associate a Afiliado object to this object
     * through the Afiliado foreign key attribute.
     *
     * @param    Afiliado $l Afiliado
     * @return   Localidad The current object (for fluent API support)
     */
    public function addAfiliado(Afiliado $l)
    {
        if ($this->collAfiliados === null) {
            $this->initAfiliados();
        }
        if (!$this->collAfiliados->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAfiliado($l);
        }

        return $this;
    }

    /**
     * @param	Afiliado $afiliado The afiliado object to add.
     */
    protected function doAddAfiliado($afiliado)
    {
        $this->collAfiliados[]= $afiliado;
        $afiliado->setLocalidad($this);
    }

    /**
     * @param	Afiliado $afiliado The afiliado object to remove.
     */
    public function removeAfiliado($afiliado)
    {
        if ($this->getAfiliados()->contains($afiliado)) {
            $this->collAfiliados->remove($this->collAfiliados->search($afiliado));
            if (null === $this->afiliadosScheduledForDeletion) {
                $this->afiliadosScheduledForDeletion = clone $this->collAfiliados;
                $this->afiliadosScheduledForDeletion->clear();
            }
            $this->afiliadosScheduledForDeletion[]= $afiliado;
            $afiliado->setLocalidad(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Afiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     */
    public function getAfiliadosJoinPlan($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AfiliadoQuery::create(null, $criteria);
        $query->joinWith('Plan', $join_behavior);

        return $this->getAfiliados($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Afiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     */
    public function getAfiliadosJoinTipodoc($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AfiliadoQuery::create(null, $criteria);
        $query->joinWith('Tipodoc', $join_behavior);

        return $this->getAfiliados($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Afiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     */
    public function getAfiliadosJoinReparticion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AfiliadoQuery::create(null, $criteria);
        $query->joinWith('Reparticion', $join_behavior);

        return $this->getAfiliados($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Afiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     */
    public function getAfiliadosJoinSexo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AfiliadoQuery::create(null, $criteria);
        $query->joinWith('Sexo', $join_behavior);

        return $this->getAfiliados($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Afiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Afiliado[] List of Afiliado objects
     */
    public function getAfiliadosJoinEstadocivil($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AfiliadoQuery::create(null, $criteria);
        $query->joinWith('Estadocivil', $join_behavior);

        return $this->getAfiliados($query, $con);
    }

    /**
     * Clears out the collCentroatencions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCentroatencions()
     */
    public function clearCentroatencions()
    {
        $this->collCentroatencions = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collCentroatencions collection.
     *
     * By default this just sets the collCentroatencions collection to an empty array (like clearcollCentroatencions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCentroatencions($overrideExisting = true)
    {
        if (null !== $this->collCentroatencions && !$overrideExisting) {
            return;
        }
        $this->collCentroatencions = new PropelObjectCollection();
        $this->collCentroatencions->setModel('Centroatencion');
    }

    /**
     * Gets an array of Centroatencion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Localidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Centroatencion[] List of Centroatencion objects
     * @throws PropelException
     */
    public function getCentroatencions($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collCentroatencions || null !== $criteria) {
            if ($this->isNew() && null === $this->collCentroatencions) {
                // return empty collection
                $this->initCentroatencions();
            } else {
                $collCentroatencions = CentroatencionQuery::create(null, $criteria)
                    ->filterByLocalidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collCentroatencions;
                }
                $this->collCentroatencions = $collCentroatencions;
            }
        }

        return $this->collCentroatencions;
    }

    /**
     * Sets a collection of Centroatencion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $centroatencions A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setCentroatencions(PropelCollection $centroatencions, PropelPDO $con = null)
    {
        $this->centroatencionsScheduledForDeletion = $this->getCentroatencions(new Criteria(), $con)->diff($centroatencions);

        foreach ($this->centroatencionsScheduledForDeletion as $centroatencionRemoved) {
            $centroatencionRemoved->setLocalidad(null);
        }

        $this->collCentroatencions = null;
        foreach ($centroatencions as $centroatencion) {
            $this->addCentroatencion($centroatencion);
        }

        $this->collCentroatencions = $centroatencions;
    }

    /**
     * Returns the number of related Centroatencion objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Centroatencion objects.
     * @throws PropelException
     */
    public function countCentroatencions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collCentroatencions || null !== $criteria) {
            if ($this->isNew() && null === $this->collCentroatencions) {
                return 0;
            } else {
                $query = CentroatencionQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByLocalidad($this)
                    ->count($con);
            }
        } else {
            return count($this->collCentroatencions);
        }
    }

    /**
     * Method called to associate a Centroatencion object to this object
     * through the Centroatencion foreign key attribute.
     *
     * @param    Centroatencion $l Centroatencion
     * @return   Localidad The current object (for fluent API support)
     */
    public function addCentroatencion(Centroatencion $l)
    {
        if ($this->collCentroatencions === null) {
            $this->initCentroatencions();
        }
        if (!$this->collCentroatencions->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddCentroatencion($l);
        }

        return $this;
    }

    /**
     * @param	Centroatencion $centroatencion The centroatencion object to add.
     */
    protected function doAddCentroatencion($centroatencion)
    {
        $this->collCentroatencions[]= $centroatencion;
        $centroatencion->setLocalidad($this);
    }

    /**
     * @param	Centroatencion $centroatencion The centroatencion object to remove.
     */
    public function removeCentroatencion($centroatencion)
    {
        if ($this->getCentroatencions()->contains($centroatencion)) {
            $this->collCentroatencions->remove($this->collCentroatencions->search($centroatencion));
            if (null === $this->centroatencionsScheduledForDeletion) {
                $this->centroatencionsScheduledForDeletion = clone $this->collCentroatencions;
                $this->centroatencionsScheduledForDeletion->clear();
            }
            $this->centroatencionsScheduledForDeletion[]= $centroatencion;
            $centroatencion->setLocalidad(null);
        }
    }

    /**
     * Clears out the collPrestadors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPrestadors()
     */
    public function clearPrestadors()
    {
        $this->collPrestadors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collPrestadors collection.
     *
     * By default this just sets the collPrestadors collection to an empty array (like clearcollPrestadors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPrestadors($overrideExisting = true)
    {
        if (null !== $this->collPrestadors && !$overrideExisting) {
            return;
        }
        $this->collPrestadors = new PropelObjectCollection();
        $this->collPrestadors->setModel('Prestador');
    }

    /**
     * Gets an array of Prestador objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Localidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Prestador[] List of Prestador objects
     * @throws PropelException
     */
    public function getPrestadors($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collPrestadors || null !== $criteria) {
            if ($this->isNew() && null === $this->collPrestadors) {
                // return empty collection
                $this->initPrestadors();
            } else {
                $collPrestadors = PrestadorQuery::create(null, $criteria)
                    ->filterByLocalidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collPrestadors;
                }
                $this->collPrestadors = $collPrestadors;
            }
        }

        return $this->collPrestadors;
    }

    /**
     * Sets a collection of Prestador objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $prestadors A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setPrestadors(PropelCollection $prestadors, PropelPDO $con = null)
    {
        $this->prestadorsScheduledForDeletion = $this->getPrestadors(new Criteria(), $con)->diff($prestadors);

        foreach ($this->prestadorsScheduledForDeletion as $prestadorRemoved) {
            $prestadorRemoved->setLocalidad(null);
        }

        $this->collPrestadors = null;
        foreach ($prestadors as $prestador) {
            $this->addPrestador($prestador);
        }

        $this->collPrestadors = $prestadors;
    }

    /**
     * Returns the number of related Prestador objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Prestador objects.
     * @throws PropelException
     */
    public function countPrestadors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collPrestadors || null !== $criteria) {
            if ($this->isNew() && null === $this->collPrestadors) {
                return 0;
            } else {
                $query = PrestadorQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByLocalidad($this)
                    ->count($con);
            }
        } else {
            return count($this->collPrestadors);
        }
    }

    /**
     * Method called to associate a Prestador object to this object
     * through the Prestador foreign key attribute.
     *
     * @param    Prestador $l Prestador
     * @return   Localidad The current object (for fluent API support)
     */
    public function addPrestador(Prestador $l)
    {
        if ($this->collPrestadors === null) {
            $this->initPrestadors();
        }
        if (!$this->collPrestadors->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddPrestador($l);
        }

        return $this;
    }

    /**
     * @param	Prestador $prestador The prestador object to add.
     */
    protected function doAddPrestador($prestador)
    {
        $this->collPrestadors[]= $prestador;
        $prestador->setLocalidad($this);
    }

    /**
     * @param	Prestador $prestador The prestador object to remove.
     */
    public function removePrestador($prestador)
    {
        if ($this->getPrestadors()->contains($prestador)) {
            $this->collPrestadors->remove($this->collPrestadors->search($prestador));
            if (null === $this->prestadorsScheduledForDeletion) {
                $this->prestadorsScheduledForDeletion = clone $this->collPrestadors;
                $this->prestadorsScheduledForDeletion->clear();
            }
            $this->prestadorsScheduledForDeletion[]= $prestador;
            $prestador->setLocalidad(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Localidad is new, it will return
     * an empty collection; or if this Localidad has previously
     * been saved, it will retrieve related Prestadors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Localidad.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Prestador[] List of Prestador objects
     */
    public function getPrestadorsJoinEspecialidad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PrestadorQuery::create(null, $criteria);
        $query->joinWith('Especialidad', $join_behavior);

        return $this->getPrestadors($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->descripcion = null;
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
            if ($this->collAfiliados) {
                foreach ($this->collAfiliados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCentroatencions) {
                foreach ($this->collCentroatencions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPrestadors) {
                foreach ($this->collPrestadors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collAfiliados instanceof PropelCollection) {
            $this->collAfiliados->clearIterator();
        }
        $this->collAfiliados = null;
        if ($this->collCentroatencions instanceof PropelCollection) {
            $this->collCentroatencions->clearIterator();
        }
        $this->collCentroatencions = null;
        if ($this->collPrestadors instanceof PropelCollection) {
            $this->collPrestadors->clearIterator();
        }
        $this->collPrestadors = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LocalidadPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseLocalidad:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseLocalidad
