<?php


/**
 * Base class that represents a row from the 'centroatencion' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCentroatencion extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'CentroatencionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CentroatencionPeer
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
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the calle field.
     * @var        string
     */
    protected $calle;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the depto field.
     * @var        string
     */
    protected $depto;

    /**
     * The value for the piso field.
     * @var        int
     */
    protected $piso;

    /**
     * The value for the localidad_id field.
     * @var        int
     */
    protected $localidad_id;

    /**
     * @var        Localidad
     */
    protected $aLocalidad;

    /**
     * @var        PropelObjectCollection|CentroatencionHasPrestador[] Collection to store aggregation of CentroatencionHasPrestador objects.
     */
    protected $collCentroatencionHasPrestadors;

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
    protected $centroatencionHasPrestadorsScheduledForDeletion = null;

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
     * Get the [nombre] column value.
     * 
     * @return   string
     */
    public function getNombre()
    {

        return $this->nombre;
    }

    /**
     * Get the [calle] column value.
     * 
     * @return   string
     */
    public function getCalle()
    {

        return $this->calle;
    }

    /**
     * Get the [numero] column value.
     * 
     * @return   string
     */
    public function getNumero()
    {

        return $this->numero;
    }

    /**
     * Get the [depto] column value.
     * 
     * @return   string
     */
    public function getDepto()
    {

        return $this->depto;
    }

    /**
     * Get the [piso] column value.
     * 
     * @return   int
     */
    public function getPiso()
    {

        return $this->piso;
    }

    /**
     * Get the [localidad_id] column value.
     * 
     * @return   int
     */
    public function getLocalidadId()
    {

        return $this->localidad_id;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CentroatencionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nombre] column.
     * 
     * @param      string $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = CentroatencionPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [calle] column.
     * 
     * @param      string $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->calle !== $v) {
            $this->calle = $v;
            $this->modifiedColumns[] = CentroatencionPeer::CALLE;
        }


        return $this;
    } // setCalle()

    /**
     * Set the value of [numero] column.
     * 
     * @param      string $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CentroatencionPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [depto] column.
     * 
     * @param      string $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setDepto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->depto !== $v) {
            $this->depto = $v;
            $this->modifiedColumns[] = CentroatencionPeer::DEPTO;
        }


        return $this;
    } // setDepto()

    /**
     * Set the value of [piso] column.
     * 
     * @param      int $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setPiso($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->piso !== $v) {
            $this->piso = $v;
            $this->modifiedColumns[] = CentroatencionPeer::PISO;
        }


        return $this;
    } // setPiso()

    /**
     * Set the value of [localidad_id] column.
     * 
     * @param      int $v new value
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function setLocalidadId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->localidad_id !== $v) {
            $this->localidad_id = $v;
            $this->modifiedColumns[] = CentroatencionPeer::LOCALIDAD_ID;
        }

        if ($this->aLocalidad !== null && $this->aLocalidad->getId() !== $v) {
            $this->aLocalidad = null;
        }


        return $this;
    } // setLocalidadId()

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
            $this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->calle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->numero = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->depto = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->piso = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->localidad_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = CentroatencionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Centroatencion object", $e);
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

        if ($this->aLocalidad !== null && $this->localidad_id !== $this->aLocalidad->getId()) {
            $this->aLocalidad = null;
        }
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
            $con = Propel::getConnection(CentroatencionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CentroatencionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLocalidad = null;
            $this->collCentroatencionHasPrestadors = null;

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
            $con = Propel::getConnection(CentroatencionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CentroatencionQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCentroatencion:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseCentroatencion:delete:post') as $callable)
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
            $con = Propel::getConnection(CentroatencionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCentroatencion:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseCentroatencion:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                CentroatencionPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aLocalidad !== null) {
                if ($this->aLocalidad->isModified() || $this->aLocalidad->isNew()) {
                    $affectedRows += $this->aLocalidad->save($con);
                }
                $this->setLocalidad($this->aLocalidad);
            }

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

            if ($this->centroatencionHasPrestadorsScheduledForDeletion !== null) {
                if (!$this->centroatencionHasPrestadorsScheduledForDeletion->isEmpty()) {
                    CentroatencionHasPrestadorQuery::create()
                        ->filterByPrimaryKeys($this->centroatencionHasPrestadorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->centroatencionHasPrestadorsScheduledForDeletion = null;
                }
            }

            if ($this->collCentroatencionHasPrestadors !== null) {
                foreach ($this->collCentroatencionHasPrestadors as $referrerFK) {
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

        $this->modifiedColumns[] = CentroatencionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CentroatencionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CentroatencionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CentroatencionPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE`';
        }
        if ($this->isColumnModified(CentroatencionPeer::CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`CALLE`';
        }
        if ($this->isColumnModified(CentroatencionPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO`';
        }
        if ($this->isColumnModified(CentroatencionPeer::DEPTO)) {
            $modifiedColumns[':p' . $index++]  = '`DEPTO`';
        }
        if ($this->isColumnModified(CentroatencionPeer::PISO)) {
            $modifiedColumns[':p' . $index++]  = '`PISO`';
        }
        if ($this->isColumnModified(CentroatencionPeer::LOCALIDAD_ID)) {
            $modifiedColumns[':p' . $index++]  = '`LOCALIDAD_ID`';
        }

        $sql = sprintf(
            'INSERT INTO `centroatencion` (%s) VALUES (%s)',
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
                    case '`NOMBRE`':
						$stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`CALLE`':
						$stmt->bindValue($identifier, $this->calle, PDO::PARAM_STR);
                        break;
                    case '`NUMERO`':
						$stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`DEPTO`':
						$stmt->bindValue($identifier, $this->depto, PDO::PARAM_STR);
                        break;
                    case '`PISO`':
						$stmt->bindValue($identifier, $this->piso, PDO::PARAM_INT);
                        break;
                    case '`LOCALIDAD_ID`':
						$stmt->bindValue($identifier, $this->localidad_id, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aLocalidad !== null) {
                if (!$this->aLocalidad->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocalidad->getValidationFailures());
                }
            }


            if (($retval = CentroatencionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCentroatencionHasPrestadors !== null) {
                    foreach ($this->collCentroatencionHasPrestadors as $referrerFK) {
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
        $pos = CentroatencionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNombre();
                break;
            case 2:
                return $this->getCalle();
                break;
            case 3:
                return $this->getNumero();
                break;
            case 4:
                return $this->getDepto();
                break;
            case 5:
                return $this->getPiso();
                break;
            case 6:
                return $this->getLocalidadId();
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
        if (isset($alreadyDumpedObjects['Centroatencion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Centroatencion'][$this->getPrimaryKey()] = true;
        $keys = CentroatencionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNombre(),
            $keys[2] => $this->getCalle(),
            $keys[3] => $this->getNumero(),
            $keys[4] => $this->getDepto(),
            $keys[5] => $this->getPiso(),
            $keys[6] => $this->getLocalidadId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aLocalidad) {
                $result['Localidad'] = $this->aLocalidad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCentroatencionHasPrestadors) {
                $result['CentroatencionHasPrestadors'] = $this->collCentroatencionHasPrestadors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CentroatencionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNombre($value);
                break;
            case 2:
                $this->setCalle($value);
                break;
            case 3:
                $this->setNumero($value);
                break;
            case 4:
                $this->setDepto($value);
                break;
            case 5:
                $this->setPiso($value);
                break;
            case 6:
                $this->setLocalidadId($value);
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
        $keys = CentroatencionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCalle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDepto($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPiso($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLocalidadId($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CentroatencionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CentroatencionPeer::ID)) $criteria->add(CentroatencionPeer::ID, $this->id);
        if ($this->isColumnModified(CentroatencionPeer::NOMBRE)) $criteria->add(CentroatencionPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(CentroatencionPeer::CALLE)) $criteria->add(CentroatencionPeer::CALLE, $this->calle);
        if ($this->isColumnModified(CentroatencionPeer::NUMERO)) $criteria->add(CentroatencionPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CentroatencionPeer::DEPTO)) $criteria->add(CentroatencionPeer::DEPTO, $this->depto);
        if ($this->isColumnModified(CentroatencionPeer::PISO)) $criteria->add(CentroatencionPeer::PISO, $this->piso);
        if ($this->isColumnModified(CentroatencionPeer::LOCALIDAD_ID)) $criteria->add(CentroatencionPeer::LOCALIDAD_ID, $this->localidad_id);

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
        $criteria = new Criteria(CentroatencionPeer::DATABASE_NAME);
        $criteria->add(CentroatencionPeer::ID, $this->id);

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
     * @param      object $copyObj An object of Centroatencion (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombre($this->getNombre());
        $copyObj->setCalle($this->getCalle());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setDepto($this->getDepto());
        $copyObj->setPiso($this->getPiso());
        $copyObj->setLocalidadId($this->getLocalidadId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCentroatencionHasPrestadors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCentroatencionHasPrestador($relObj->copy($deepCopy));
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
     * @return                 Centroatencion Clone of current object.
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
     * @return   CentroatencionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CentroatencionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Localidad object.
     *
     * @param                  Localidad $v
     * @return                 Centroatencion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLocalidad(Localidad $v = null)
    {
        if ($v === null) {
            $this->setLocalidadId(NULL);
        } else {
            $this->setLocalidadId($v->getId());
        }

        $this->aLocalidad = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Localidad object, it will not be re-added.
        if ($v !== null) {
            $v->addCentroatencion($this);
        }


        return $this;
    }


    /**
     * Get the associated Localidad object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Localidad The associated Localidad object.
     * @throws PropelException
     */
    public function getLocalidad(PropelPDO $con = null)
    {
        if ($this->aLocalidad === null && ($this->localidad_id !== null)) {
            $this->aLocalidad = LocalidadQuery::create()->findPk($this->localidad_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLocalidad->addCentroatencions($this);
             */
        }

        return $this->aLocalidad;
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
        if ('CentroatencionHasPrestador' == $relationName) {
            $this->initCentroatencionHasPrestadors();
        }
    }

    /**
     * Clears out the collCentroatencionHasPrestadors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCentroatencionHasPrestadors()
     */
    public function clearCentroatencionHasPrestadors()
    {
        $this->collCentroatencionHasPrestadors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collCentroatencionHasPrestadors collection.
     *
     * By default this just sets the collCentroatencionHasPrestadors collection to an empty array (like clearcollCentroatencionHasPrestadors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCentroatencionHasPrestadors($overrideExisting = true)
    {
        if (null !== $this->collCentroatencionHasPrestadors && !$overrideExisting) {
            return;
        }
        $this->collCentroatencionHasPrestadors = new PropelObjectCollection();
        $this->collCentroatencionHasPrestadors->setModel('CentroatencionHasPrestador');
    }

    /**
     * Gets an array of CentroatencionHasPrestador objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Centroatencion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|CentroatencionHasPrestador[] List of CentroatencionHasPrestador objects
     * @throws PropelException
     */
    public function getCentroatencionHasPrestadors($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collCentroatencionHasPrestadors || null !== $criteria) {
            if ($this->isNew() && null === $this->collCentroatencionHasPrestadors) {
                // return empty collection
                $this->initCentroatencionHasPrestadors();
            } else {
                $collCentroatencionHasPrestadors = CentroatencionHasPrestadorQuery::create(null, $criteria)
                    ->filterByCentroatencion($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collCentroatencionHasPrestadors;
                }
                $this->collCentroatencionHasPrestadors = $collCentroatencionHasPrestadors;
            }
        }

        return $this->collCentroatencionHasPrestadors;
    }

    /**
     * Sets a collection of CentroatencionHasPrestador objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $centroatencionHasPrestadors A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setCentroatencionHasPrestadors(PropelCollection $centroatencionHasPrestadors, PropelPDO $con = null)
    {
        $this->centroatencionHasPrestadorsScheduledForDeletion = $this->getCentroatencionHasPrestadors(new Criteria(), $con)->diff($centroatencionHasPrestadors);

        foreach ($this->centroatencionHasPrestadorsScheduledForDeletion as $centroatencionHasPrestadorRemoved) {
            $centroatencionHasPrestadorRemoved->setCentroatencion(null);
        }

        $this->collCentroatencionHasPrestadors = null;
        foreach ($centroatencionHasPrestadors as $centroatencionHasPrestador) {
            $this->addCentroatencionHasPrestador($centroatencionHasPrestador);
        }

        $this->collCentroatencionHasPrestadors = $centroatencionHasPrestadors;
    }

    /**
     * Returns the number of related CentroatencionHasPrestador objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related CentroatencionHasPrestador objects.
     * @throws PropelException
     */
    public function countCentroatencionHasPrestadors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collCentroatencionHasPrestadors || null !== $criteria) {
            if ($this->isNew() && null === $this->collCentroatencionHasPrestadors) {
                return 0;
            } else {
                $query = CentroatencionHasPrestadorQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByCentroatencion($this)
                    ->count($con);
            }
        } else {
            return count($this->collCentroatencionHasPrestadors);
        }
    }

    /**
     * Method called to associate a CentroatencionHasPrestador object to this object
     * through the CentroatencionHasPrestador foreign key attribute.
     *
     * @param    CentroatencionHasPrestador $l CentroatencionHasPrestador
     * @return   Centroatencion The current object (for fluent API support)
     */
    public function addCentroatencionHasPrestador(CentroatencionHasPrestador $l)
    {
        if ($this->collCentroatencionHasPrestadors === null) {
            $this->initCentroatencionHasPrestadors();
        }
        if (!$this->collCentroatencionHasPrestadors->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddCentroatencionHasPrestador($l);
        }

        return $this;
    }

    /**
     * @param	CentroatencionHasPrestador $centroatencionHasPrestador The centroatencionHasPrestador object to add.
     */
    protected function doAddCentroatencionHasPrestador($centroatencionHasPrestador)
    {
        $this->collCentroatencionHasPrestadors[]= $centroatencionHasPrestador;
        $centroatencionHasPrestador->setCentroatencion($this);
    }

    /**
     * @param	CentroatencionHasPrestador $centroatencionHasPrestador The centroatencionHasPrestador object to remove.
     */
    public function removeCentroatencionHasPrestador($centroatencionHasPrestador)
    {
        if ($this->getCentroatencionHasPrestadors()->contains($centroatencionHasPrestador)) {
            $this->collCentroatencionHasPrestadors->remove($this->collCentroatencionHasPrestadors->search($centroatencionHasPrestador));
            if (null === $this->centroatencionHasPrestadorsScheduledForDeletion) {
                $this->centroatencionHasPrestadorsScheduledForDeletion = clone $this->collCentroatencionHasPrestadors;
                $this->centroatencionHasPrestadorsScheduledForDeletion->clear();
            }
            $this->centroatencionHasPrestadorsScheduledForDeletion[]= $centroatencionHasPrestador;
            $centroatencionHasPrestador->setCentroatencion(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Centroatencion is new, it will return
     * an empty collection; or if this Centroatencion has previously
     * been saved, it will retrieve related CentroatencionHasPrestadors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Centroatencion.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CentroatencionHasPrestador[] List of CentroatencionHasPrestador objects
     */
    public function getCentroatencionHasPrestadorsJoinPrestador($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CentroatencionHasPrestadorQuery::create(null, $criteria);
        $query->joinWith('Prestador', $join_behavior);

        return $this->getCentroatencionHasPrestadors($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nombre = null;
        $this->calle = null;
        $this->numero = null;
        $this->depto = null;
        $this->piso = null;
        $this->localidad_id = null;
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
            if ($this->collCentroatencionHasPrestadors) {
                foreach ($this->collCentroatencionHasPrestadors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collCentroatencionHasPrestadors instanceof PropelCollection) {
            $this->collCentroatencionHasPrestadors->clearIterator();
        }
        $this->collCentroatencionHasPrestadors = null;
        $this->aLocalidad = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CentroatencionPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCentroatencion:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseCentroatencion
