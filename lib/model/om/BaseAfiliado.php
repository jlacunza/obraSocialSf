<?php


/**
 * Base class that represents a row from the 'afiliado' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAfiliado extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'AfiliadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AfiliadoPeer
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
     * The value for the nro_doc field.
     * @var        int
     */
    protected $nro_doc;

    /**
     * The value for the apenombre field.
     * @var        string
     */
    protected $apenombre;

    /**
     * The value for the fechanac field.
     * @var        string
     */
    protected $fechanac;

    /**
     * The value for the calle field.
     * @var        string
     */
    protected $calle;

    /**
     * The value for the altura field.
     * @var        string
     */
    protected $altura;

    /**
     * The value for the piso field.
     * @var        string
     */
    protected $piso;

    /**
     * The value for the depto field.
     * @var        string
     */
    protected $depto;

    /**
     * The value for the plan_id field.
     * @var        int
     */
    protected $plan_id;

    /**
     * The value for the tipodoc_id field.
     * @var        int
     */
    protected $tipodoc_id;

    /**
     * The value for the reparticion_id field.
     * @var        int
     */
    protected $reparticion_id;

    /**
     * The value for the localidad_id field.
     * @var        int
     */
    protected $localidad_id;

    /**
     * The value for the fechaingreso field.
     * @var        string
     */
    protected $fechaingreso;

    /**
     * The value for the sexo_id field.
     * @var        int
     */
    protected $sexo_id;

    /**
     * The value for the estadocivil_id field.
     * @var        int
     */
    protected $estadocivil_id;

    /**
     * @var        Plan
     */
    protected $aPlan;

    /**
     * @var        Tipodoc
     */
    protected $aTipodoc;

    /**
     * @var        Reparticion
     */
    protected $aReparticion;

    /**
     * @var        Localidad
     */
    protected $aLocalidad;

    /**
     * @var        Sexo
     */
    protected $aSexo;

    /**
     * @var        Estadocivil
     */
    protected $aEstadocivil;

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
     * Get the [id] column value.
     * 
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [nro_doc] column value.
     * 
     * @return   int
     */
    public function getNroDoc()
    {

        return $this->nro_doc;
    }

    /**
     * Get the [apenombre] column value.
     * 
     * @return   string
     */
    public function getApenombre()
    {

        return $this->apenombre;
    }

    /**
     * Get the [optionally formatted] temporal [fechanac] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechanac($format = 'Y-m-d')
    {
        if ($this->fechanac === null) {
            return null;
        }


        if ($this->fechanac === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fechanac);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechanac, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
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
     * Get the [altura] column value.
     * 
     * @return   string
     */
    public function getAltura()
    {

        return $this->altura;
    }

    /**
     * Get the [piso] column value.
     * 
     * @return   string
     */
    public function getPiso()
    {

        return $this->piso;
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
     * Get the [plan_id] column value.
     * 
     * @return   int
     */
    public function getPlanId()
    {

        return $this->plan_id;
    }

    /**
     * Get the [tipodoc_id] column value.
     * 
     * @return   int
     */
    public function getTipodocId()
    {

        return $this->tipodoc_id;
    }

    /**
     * Get the [reparticion_id] column value.
     * 
     * @return   int
     */
    public function getReparticionId()
    {

        return $this->reparticion_id;
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
     * Get the [optionally formatted] temporal [fechaingreso] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaingreso($format = 'Y-m-d')
    {
        if ($this->fechaingreso === null) {
            return null;
        }


        if ($this->fechaingreso === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fechaingreso);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechaingreso, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [sexo_id] column value.
     * 
     * @return   int
     */
    public function getSexoId()
    {

        return $this->sexo_id;
    }

    /**
     * Get the [estadocivil_id] column value.
     * 
     * @return   int
     */
    public function getEstadocivilId()
    {

        return $this->estadocivil_id;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nro_doc] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setNroDoc($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nro_doc !== $v) {
            $this->nro_doc = $v;
            $this->modifiedColumns[] = AfiliadoPeer::NRO_DOC;
        }


        return $this;
    } // setNroDoc()

    /**
     * Set the value of [apenombre] column.
     * 
     * @param      string $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setApenombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apenombre !== $v) {
            $this->apenombre = $v;
            $this->modifiedColumns[] = AfiliadoPeer::APENOMBRE;
        }


        return $this;
    } // setApenombre()

    /**
     * Sets the value of [fechanac] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setFechanac($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fechanac !== null || $dt !== null) {
            $currentDateAsString = ($this->fechanac !== null && $tmpDt = new DateTime($this->fechanac)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fechanac = $newDateAsString;
                $this->modifiedColumns[] = AfiliadoPeer::FECHANAC;
            }
        } // if either are not null


        return $this;
    } // setFechanac()

    /**
     * Set the value of [calle] column.
     * 
     * @param      string $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->calle !== $v) {
            $this->calle = $v;
            $this->modifiedColumns[] = AfiliadoPeer::CALLE;
        }


        return $this;
    } // setCalle()

    /**
     * Set the value of [altura] column.
     * 
     * @param      string $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setAltura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->altura !== $v) {
            $this->altura = $v;
            $this->modifiedColumns[] = AfiliadoPeer::ALTURA;
        }


        return $this;
    } // setAltura()

    /**
     * Set the value of [piso] column.
     * 
     * @param      string $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setPiso($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->piso !== $v) {
            $this->piso = $v;
            $this->modifiedColumns[] = AfiliadoPeer::PISO;
        }


        return $this;
    } // setPiso()

    /**
     * Set the value of [depto] column.
     * 
     * @param      string $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setDepto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->depto !== $v) {
            $this->depto = $v;
            $this->modifiedColumns[] = AfiliadoPeer::DEPTO;
        }


        return $this;
    } // setDepto()

    /**
     * Set the value of [plan_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setPlanId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->plan_id !== $v) {
            $this->plan_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::PLAN_ID;
        }

        if ($this->aPlan !== null && $this->aPlan->getId() !== $v) {
            $this->aPlan = null;
        }


        return $this;
    } // setPlanId()

    /**
     * Set the value of [tipodoc_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setTipodocId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tipodoc_id !== $v) {
            $this->tipodoc_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::TIPODOC_ID;
        }

        if ($this->aTipodoc !== null && $this->aTipodoc->getId() !== $v) {
            $this->aTipodoc = null;
        }


        return $this;
    } // setTipodocId()

    /**
     * Set the value of [reparticion_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setReparticionId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->reparticion_id !== $v) {
            $this->reparticion_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::REPARTICION_ID;
        }

        if ($this->aReparticion !== null && $this->aReparticion->getId() !== $v) {
            $this->aReparticion = null;
        }


        return $this;
    } // setReparticionId()

    /**
     * Set the value of [localidad_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setLocalidadId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->localidad_id !== $v) {
            $this->localidad_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::LOCALIDAD_ID;
        }

        if ($this->aLocalidad !== null && $this->aLocalidad->getId() !== $v) {
            $this->aLocalidad = null;
        }


        return $this;
    } // setLocalidadId()

    /**
     * Sets the value of [fechaingreso] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setFechaingreso($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fechaingreso !== null || $dt !== null) {
            $currentDateAsString = ($this->fechaingreso !== null && $tmpDt = new DateTime($this->fechaingreso)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fechaingreso = $newDateAsString;
                $this->modifiedColumns[] = AfiliadoPeer::FECHAINGRESO;
            }
        } // if either are not null


        return $this;
    } // setFechaingreso()

    /**
     * Set the value of [sexo_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setSexoId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->sexo_id !== $v) {
            $this->sexo_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::SEXO_ID;
        }

        if ($this->aSexo !== null && $this->aSexo->getId() !== $v) {
            $this->aSexo = null;
        }


        return $this;
    } // setSexoId()

    /**
     * Set the value of [estadocivil_id] column.
     * 
     * @param      int $v new value
     * @return   Afiliado The current object (for fluent API support)
     */
    public function setEstadocivilId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->estadocivil_id !== $v) {
            $this->estadocivil_id = $v;
            $this->modifiedColumns[] = AfiliadoPeer::ESTADOCIVIL_ID;
        }

        if ($this->aEstadocivil !== null && $this->aEstadocivil->getId() !== $v) {
            $this->aEstadocivil = null;
        }


        return $this;
    } // setEstadocivilId()

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
            $this->nro_doc = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->apenombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->fechanac = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->altura = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->piso = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->depto = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->plan_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tipodoc_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->reparticion_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->localidad_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->fechaingreso = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->sexo_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->estadocivil_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = AfiliadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Afiliado object", $e);
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

        if ($this->aPlan !== null && $this->plan_id !== $this->aPlan->getId()) {
            $this->aPlan = null;
        }
        if ($this->aTipodoc !== null && $this->tipodoc_id !== $this->aTipodoc->getId()) {
            $this->aTipodoc = null;
        }
        if ($this->aReparticion !== null && $this->reparticion_id !== $this->aReparticion->getId()) {
            $this->aReparticion = null;
        }
        if ($this->aLocalidad !== null && $this->localidad_id !== $this->aLocalidad->getId()) {
            $this->aLocalidad = null;
        }
        if ($this->aSexo !== null && $this->sexo_id !== $this->aSexo->getId()) {
            $this->aSexo = null;
        }
        if ($this->aEstadocivil !== null && $this->estadocivil_id !== $this->aEstadocivil->getId()) {
            $this->aEstadocivil = null;
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
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AfiliadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPlan = null;
            $this->aTipodoc = null;
            $this->aReparticion = null;
            $this->aLocalidad = null;
            $this->aSexo = null;
            $this->aEstadocivil = null;
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
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AfiliadoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAfiliado:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseAfiliado:delete:post') as $callable)
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
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAfiliado:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseAfiliado:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                AfiliadoPeer::addInstanceToPool($this);
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

            if ($this->aPlan !== null) {
                if ($this->aPlan->isModified() || $this->aPlan->isNew()) {
                    $affectedRows += $this->aPlan->save($con);
                }
                $this->setPlan($this->aPlan);
            }

            if ($this->aTipodoc !== null) {
                if ($this->aTipodoc->isModified() || $this->aTipodoc->isNew()) {
                    $affectedRows += $this->aTipodoc->save($con);
                }
                $this->setTipodoc($this->aTipodoc);
            }

            if ($this->aReparticion !== null) {
                if ($this->aReparticion->isModified() || $this->aReparticion->isNew()) {
                    $affectedRows += $this->aReparticion->save($con);
                }
                $this->setReparticion($this->aReparticion);
            }

            if ($this->aLocalidad !== null) {
                if ($this->aLocalidad->isModified() || $this->aLocalidad->isNew()) {
                    $affectedRows += $this->aLocalidad->save($con);
                }
                $this->setLocalidad($this->aLocalidad);
            }

            if ($this->aSexo !== null) {
                if ($this->aSexo->isModified() || $this->aSexo->isNew()) {
                    $affectedRows += $this->aSexo->save($con);
                }
                $this->setSexo($this->aSexo);
            }

            if ($this->aEstadocivil !== null) {
                if ($this->aEstadocivil->isModified() || $this->aEstadocivil->isNew()) {
                    $affectedRows += $this->aEstadocivil->save($con);
                }
                $this->setEstadocivil($this->aEstadocivil);
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

        $this->modifiedColumns[] = AfiliadoPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AfiliadoPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AfiliadoPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::NRO_DOC)) {
            $modifiedColumns[':p' . $index++]  = '`NRO_DOC`';
        }
        if ($this->isColumnModified(AfiliadoPeer::APENOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`APENOMBRE`';
        }
        if ($this->isColumnModified(AfiliadoPeer::FECHANAC)) {
            $modifiedColumns[':p' . $index++]  = '`FECHANAC`';
        }
        if ($this->isColumnModified(AfiliadoPeer::CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`CALLE`';
        }
        if ($this->isColumnModified(AfiliadoPeer::ALTURA)) {
            $modifiedColumns[':p' . $index++]  = '`ALTURA`';
        }
        if ($this->isColumnModified(AfiliadoPeer::PISO)) {
            $modifiedColumns[':p' . $index++]  = '`PISO`';
        }
        if ($this->isColumnModified(AfiliadoPeer::DEPTO)) {
            $modifiedColumns[':p' . $index++]  = '`DEPTO`';
        }
        if ($this->isColumnModified(AfiliadoPeer::PLAN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`PLAN_ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::TIPODOC_ID)) {
            $modifiedColumns[':p' . $index++]  = '`TIPODOC_ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::REPARTICION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`REPARTICION_ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::LOCALIDAD_ID)) {
            $modifiedColumns[':p' . $index++]  = '`LOCALIDAD_ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::FECHAINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`FECHAINGRESO`';
        }
        if ($this->isColumnModified(AfiliadoPeer::SEXO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SEXO_ID`';
        }
        if ($this->isColumnModified(AfiliadoPeer::ESTADOCIVIL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ESTADOCIVIL_ID`';
        }

        $sql = sprintf(
            'INSERT INTO `afiliado` (%s) VALUES (%s)',
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
                    case '`NRO_DOC`':
						$stmt->bindValue($identifier, $this->nro_doc, PDO::PARAM_INT);
                        break;
                    case '`APENOMBRE`':
						$stmt->bindValue($identifier, $this->apenombre, PDO::PARAM_STR);
                        break;
                    case '`FECHANAC`':
						$stmt->bindValue($identifier, $this->fechanac, PDO::PARAM_STR);
                        break;
                    case '`CALLE`':
						$stmt->bindValue($identifier, $this->calle, PDO::PARAM_STR);
                        break;
                    case '`ALTURA`':
						$stmt->bindValue($identifier, $this->altura, PDO::PARAM_STR);
                        break;
                    case '`PISO`':
						$stmt->bindValue($identifier, $this->piso, PDO::PARAM_STR);
                        break;
                    case '`DEPTO`':
						$stmt->bindValue($identifier, $this->depto, PDO::PARAM_STR);
                        break;
                    case '`PLAN_ID`':
						$stmt->bindValue($identifier, $this->plan_id, PDO::PARAM_INT);
                        break;
                    case '`TIPODOC_ID`':
						$stmt->bindValue($identifier, $this->tipodoc_id, PDO::PARAM_INT);
                        break;
                    case '`REPARTICION_ID`':
						$stmt->bindValue($identifier, $this->reparticion_id, PDO::PARAM_INT);
                        break;
                    case '`LOCALIDAD_ID`':
						$stmt->bindValue($identifier, $this->localidad_id, PDO::PARAM_INT);
                        break;
                    case '`FECHAINGRESO`':
						$stmt->bindValue($identifier, $this->fechaingreso, PDO::PARAM_STR);
                        break;
                    case '`SEXO_ID`':
						$stmt->bindValue($identifier, $this->sexo_id, PDO::PARAM_INT);
                        break;
                    case '`ESTADOCIVIL_ID`':
						$stmt->bindValue($identifier, $this->estadocivil_id, PDO::PARAM_INT);
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

            if ($this->aPlan !== null) {
                if (!$this->aPlan->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlan->getValidationFailures());
                }
            }

            if ($this->aTipodoc !== null) {
                if (!$this->aTipodoc->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipodoc->getValidationFailures());
                }
            }

            if ($this->aReparticion !== null) {
                if (!$this->aReparticion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aReparticion->getValidationFailures());
                }
            }

            if ($this->aLocalidad !== null) {
                if (!$this->aLocalidad->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocalidad->getValidationFailures());
                }
            }

            if ($this->aSexo !== null) {
                if (!$this->aSexo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSexo->getValidationFailures());
                }
            }

            if ($this->aEstadocivil !== null) {
                if (!$this->aEstadocivil->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEstadocivil->getValidationFailures());
                }
            }


            if (($retval = AfiliadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = AfiliadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNroDoc();
                break;
            case 2:
                return $this->getApenombre();
                break;
            case 3:
                return $this->getFechanac();
                break;
            case 4:
                return $this->getCalle();
                break;
            case 5:
                return $this->getAltura();
                break;
            case 6:
                return $this->getPiso();
                break;
            case 7:
                return $this->getDepto();
                break;
            case 8:
                return $this->getPlanId();
                break;
            case 9:
                return $this->getTipodocId();
                break;
            case 10:
                return $this->getReparticionId();
                break;
            case 11:
                return $this->getLocalidadId();
                break;
            case 12:
                return $this->getFechaingreso();
                break;
            case 13:
                return $this->getSexoId();
                break;
            case 14:
                return $this->getEstadocivilId();
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
        if (isset($alreadyDumpedObjects['Afiliado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Afiliado'][$this->getPrimaryKey()] = true;
        $keys = AfiliadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNroDoc(),
            $keys[2] => $this->getApenombre(),
            $keys[3] => $this->getFechanac(),
            $keys[4] => $this->getCalle(),
            $keys[5] => $this->getAltura(),
            $keys[6] => $this->getPiso(),
            $keys[7] => $this->getDepto(),
            $keys[8] => $this->getPlanId(),
            $keys[9] => $this->getTipodocId(),
            $keys[10] => $this->getReparticionId(),
            $keys[11] => $this->getLocalidadId(),
            $keys[12] => $this->getFechaingreso(),
            $keys[13] => $this->getSexoId(),
            $keys[14] => $this->getEstadocivilId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aPlan) {
                $result['Plan'] = $this->aPlan->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTipodoc) {
                $result['Tipodoc'] = $this->aTipodoc->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aReparticion) {
                $result['Reparticion'] = $this->aReparticion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLocalidad) {
                $result['Localidad'] = $this->aLocalidad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSexo) {
                $result['Sexo'] = $this->aSexo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEstadocivil) {
                $result['Estadocivil'] = $this->aEstadocivil->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = AfiliadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNroDoc($value);
                break;
            case 2:
                $this->setApenombre($value);
                break;
            case 3:
                $this->setFechanac($value);
                break;
            case 4:
                $this->setCalle($value);
                break;
            case 5:
                $this->setAltura($value);
                break;
            case 6:
                $this->setPiso($value);
                break;
            case 7:
                $this->setDepto($value);
                break;
            case 8:
                $this->setPlanId($value);
                break;
            case 9:
                $this->setTipodocId($value);
                break;
            case 10:
                $this->setReparticionId($value);
                break;
            case 11:
                $this->setLocalidadId($value);
                break;
            case 12:
                $this->setFechaingreso($value);
                break;
            case 13:
                $this->setSexoId($value);
                break;
            case 14:
                $this->setEstadocivilId($value);
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
        $keys = AfiliadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNroDoc($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setApenombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFechanac($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAltura($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPiso($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDepto($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPlanId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTipodocId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setReparticionId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLocalidadId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFechaingreso($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSexoId($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEstadocivilId($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AfiliadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(AfiliadoPeer::ID)) $criteria->add(AfiliadoPeer::ID, $this->id);
        if ($this->isColumnModified(AfiliadoPeer::NRO_DOC)) $criteria->add(AfiliadoPeer::NRO_DOC, $this->nro_doc);
        if ($this->isColumnModified(AfiliadoPeer::APENOMBRE)) $criteria->add(AfiliadoPeer::APENOMBRE, $this->apenombre);
        if ($this->isColumnModified(AfiliadoPeer::FECHANAC)) $criteria->add(AfiliadoPeer::FECHANAC, $this->fechanac);
        if ($this->isColumnModified(AfiliadoPeer::CALLE)) $criteria->add(AfiliadoPeer::CALLE, $this->calle);
        if ($this->isColumnModified(AfiliadoPeer::ALTURA)) $criteria->add(AfiliadoPeer::ALTURA, $this->altura);
        if ($this->isColumnModified(AfiliadoPeer::PISO)) $criteria->add(AfiliadoPeer::PISO, $this->piso);
        if ($this->isColumnModified(AfiliadoPeer::DEPTO)) $criteria->add(AfiliadoPeer::DEPTO, $this->depto);
        if ($this->isColumnModified(AfiliadoPeer::PLAN_ID)) $criteria->add(AfiliadoPeer::PLAN_ID, $this->plan_id);
        if ($this->isColumnModified(AfiliadoPeer::TIPODOC_ID)) $criteria->add(AfiliadoPeer::TIPODOC_ID, $this->tipodoc_id);
        if ($this->isColumnModified(AfiliadoPeer::REPARTICION_ID)) $criteria->add(AfiliadoPeer::REPARTICION_ID, $this->reparticion_id);
        if ($this->isColumnModified(AfiliadoPeer::LOCALIDAD_ID)) $criteria->add(AfiliadoPeer::LOCALIDAD_ID, $this->localidad_id);
        if ($this->isColumnModified(AfiliadoPeer::FECHAINGRESO)) $criteria->add(AfiliadoPeer::FECHAINGRESO, $this->fechaingreso);
        if ($this->isColumnModified(AfiliadoPeer::SEXO_ID)) $criteria->add(AfiliadoPeer::SEXO_ID, $this->sexo_id);
        if ($this->isColumnModified(AfiliadoPeer::ESTADOCIVIL_ID)) $criteria->add(AfiliadoPeer::ESTADOCIVIL_ID, $this->estadocivil_id);

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
        $criteria = new Criteria(AfiliadoPeer::DATABASE_NAME);
        $criteria->add(AfiliadoPeer::ID, $this->id);

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
     * @param      object $copyObj An object of Afiliado (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNroDoc($this->getNroDoc());
        $copyObj->setApenombre($this->getApenombre());
        $copyObj->setFechanac($this->getFechanac());
        $copyObj->setCalle($this->getCalle());
        $copyObj->setAltura($this->getAltura());
        $copyObj->setPiso($this->getPiso());
        $copyObj->setDepto($this->getDepto());
        $copyObj->setPlanId($this->getPlanId());
        $copyObj->setTipodocId($this->getTipodocId());
        $copyObj->setReparticionId($this->getReparticionId());
        $copyObj->setLocalidadId($this->getLocalidadId());
        $copyObj->setFechaingreso($this->getFechaingreso());
        $copyObj->setSexoId($this->getSexoId());
        $copyObj->setEstadocivilId($this->getEstadocivilId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return                 Afiliado Clone of current object.
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
     * @return   AfiliadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AfiliadoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Plan object.
     *
     * @param                  Plan $v
     * @return                 Afiliado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlan(Plan $v = null)
    {
        if ($v === null) {
            $this->setPlanId(NULL);
        } else {
            $this->setPlanId($v->getId());
        }

        $this->aPlan = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Plan object, it will not be re-added.
        if ($v !== null) {
            $v->addAfiliado($this);
        }


        return $this;
    }


    /**
     * Get the associated Plan object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Plan The associated Plan object.
     * @throws PropelException
     */
    public function getPlan(PropelPDO $con = null)
    {
        if ($this->aPlan === null && ($this->plan_id !== null)) {
            $this->aPlan = PlanQuery::create()->findPk($this->plan_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlan->addAfiliados($this);
             */
        }

        return $this->aPlan;
    }

    /**
     * Declares an association between this object and a Tipodoc object.
     *
     * @param                  Tipodoc $v
     * @return                 Afiliado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipodoc(Tipodoc $v = null)
    {
        if ($v === null) {
            $this->setTipodocId(NULL);
        } else {
            $this->setTipodocId($v->getId());
        }

        $this->aTipodoc = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tipodoc object, it will not be re-added.
        if ($v !== null) {
            $v->addAfiliado($this);
        }


        return $this;
    }


    /**
     * Get the associated Tipodoc object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Tipodoc The associated Tipodoc object.
     * @throws PropelException
     */
    public function getTipodoc(PropelPDO $con = null)
    {
        if ($this->aTipodoc === null && ($this->tipodoc_id !== null)) {
            $this->aTipodoc = TipodocQuery::create()->findPk($this->tipodoc_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipodoc->addAfiliados($this);
             */
        }

        return $this->aTipodoc;
    }

    /**
     * Declares an association between this object and a Reparticion object.
     *
     * @param                  Reparticion $v
     * @return                 Afiliado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setReparticion(Reparticion $v = null)
    {
        if ($v === null) {
            $this->setReparticionId(NULL);
        } else {
            $this->setReparticionId($v->getId());
        }

        $this->aReparticion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Reparticion object, it will not be re-added.
        if ($v !== null) {
            $v->addAfiliado($this);
        }


        return $this;
    }


    /**
     * Get the associated Reparticion object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Reparticion The associated Reparticion object.
     * @throws PropelException
     */
    public function getReparticion(PropelPDO $con = null)
    {
        if ($this->aReparticion === null && ($this->reparticion_id !== null)) {
            $this->aReparticion = ReparticionQuery::create()->findPk($this->reparticion_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aReparticion->addAfiliados($this);
             */
        }

        return $this->aReparticion;
    }

    /**
     * Declares an association between this object and a Localidad object.
     *
     * @param                  Localidad $v
     * @return                 Afiliado The current object (for fluent API support)
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
            $v->addAfiliado($this);
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
                $this->aLocalidad->addAfiliados($this);
             */
        }

        return $this->aLocalidad;
    }

    /**
     * Declares an association between this object and a Sexo object.
     *
     * @param                  Sexo $v
     * @return                 Afiliado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSexo(Sexo $v = null)
    {
        if ($v === null) {
            $this->setSexoId(NULL);
        } else {
            $this->setSexoId($v->getId());
        }

        $this->aSexo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sexo object, it will not be re-added.
        if ($v !== null) {
            $v->addAfiliado($this);
        }


        return $this;
    }


    /**
     * Get the associated Sexo object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Sexo The associated Sexo object.
     * @throws PropelException
     */
    public function getSexo(PropelPDO $con = null)
    {
        if ($this->aSexo === null && ($this->sexo_id !== null)) {
            $this->aSexo = SexoQuery::create()->findPk($this->sexo_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSexo->addAfiliados($this);
             */
        }

        return $this->aSexo;
    }

    /**
     * Declares an association between this object and a Estadocivil object.
     *
     * @param                  Estadocivil $v
     * @return                 Afiliado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEstadocivil(Estadocivil $v = null)
    {
        if ($v === null) {
            $this->setEstadocivilId(NULL);
        } else {
            $this->setEstadocivilId($v->getId());
        }

        $this->aEstadocivil = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Estadocivil object, it will not be re-added.
        if ($v !== null) {
            $v->addAfiliado($this);
        }


        return $this;
    }


    /**
     * Get the associated Estadocivil object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Estadocivil The associated Estadocivil object.
     * @throws PropelException
     */
    public function getEstadocivil(PropelPDO $con = null)
    {
        if ($this->aEstadocivil === null && ($this->estadocivil_id !== null)) {
            $this->aEstadocivil = EstadocivilQuery::create()->findPk($this->estadocivil_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEstadocivil->addAfiliados($this);
             */
        }

        return $this->aEstadocivil;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nro_doc = null;
        $this->apenombre = null;
        $this->fechanac = null;
        $this->calle = null;
        $this->altura = null;
        $this->piso = null;
        $this->depto = null;
        $this->plan_id = null;
        $this->tipodoc_id = null;
        $this->reparticion_id = null;
        $this->localidad_id = null;
        $this->fechaingreso = null;
        $this->sexo_id = null;
        $this->estadocivil_id = null;
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
        } // if ($deep)

        $this->aPlan = null;
        $this->aTipodoc = null;
        $this->aReparticion = null;
        $this->aLocalidad = null;
        $this->aSexo = null;
        $this->aEstadocivil = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AfiliadoPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseAfiliado:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseAfiliado
