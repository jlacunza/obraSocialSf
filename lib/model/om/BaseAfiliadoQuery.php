<?php


/**
 * Base class that represents a query for the 'afiliado' table.
 *
 * 
 *
 * @method     AfiliadoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AfiliadoQuery orderByNroDoc($order = Criteria::ASC) Order by the nro_doc column
 * @method     AfiliadoQuery orderByApenombre($order = Criteria::ASC) Order by the apenombre column
 * @method     AfiliadoQuery orderByFechanac($order = Criteria::ASC) Order by the fechanac column
 * @method     AfiliadoQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     AfiliadoQuery orderByAltura($order = Criteria::ASC) Order by the altura column
 * @method     AfiliadoQuery orderByPiso($order = Criteria::ASC) Order by the piso column
 * @method     AfiliadoQuery orderByDepto($order = Criteria::ASC) Order by the depto column
 * @method     AfiliadoQuery orderByPlanId($order = Criteria::ASC) Order by the plan_id column
 * @method     AfiliadoQuery orderByTipodocId($order = Criteria::ASC) Order by the tipodoc_id column
 * @method     AfiliadoQuery orderByReparticionId($order = Criteria::ASC) Order by the reparticion_id column
 * @method     AfiliadoQuery orderByLocalidadId($order = Criteria::ASC) Order by the localidad_id column
 * @method     AfiliadoQuery orderByFechaingreso($order = Criteria::ASC) Order by the fechaingreso column
 * @method     AfiliadoQuery orderBySexoId($order = Criteria::ASC) Order by the sexo_id column
 * @method     AfiliadoQuery orderByEstadocivilId($order = Criteria::ASC) Order by the estadocivil_id column
 *
 * @method     AfiliadoQuery groupById() Group by the id column
 * @method     AfiliadoQuery groupByNroDoc() Group by the nro_doc column
 * @method     AfiliadoQuery groupByApenombre() Group by the apenombre column
 * @method     AfiliadoQuery groupByFechanac() Group by the fechanac column
 * @method     AfiliadoQuery groupByCalle() Group by the calle column
 * @method     AfiliadoQuery groupByAltura() Group by the altura column
 * @method     AfiliadoQuery groupByPiso() Group by the piso column
 * @method     AfiliadoQuery groupByDepto() Group by the depto column
 * @method     AfiliadoQuery groupByPlanId() Group by the plan_id column
 * @method     AfiliadoQuery groupByTipodocId() Group by the tipodoc_id column
 * @method     AfiliadoQuery groupByReparticionId() Group by the reparticion_id column
 * @method     AfiliadoQuery groupByLocalidadId() Group by the localidad_id column
 * @method     AfiliadoQuery groupByFechaingreso() Group by the fechaingreso column
 * @method     AfiliadoQuery groupBySexoId() Group by the sexo_id column
 * @method     AfiliadoQuery groupByEstadocivilId() Group by the estadocivil_id column
 *
 * @method     AfiliadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AfiliadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AfiliadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AfiliadoQuery leftJoinPlan($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plan relation
 * @method     AfiliadoQuery rightJoinPlan($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plan relation
 * @method     AfiliadoQuery innerJoinPlan($relationAlias = null) Adds a INNER JOIN clause to the query using the Plan relation
 *
 * @method     AfiliadoQuery leftJoinTipodoc($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipodoc relation
 * @method     AfiliadoQuery rightJoinTipodoc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipodoc relation
 * @method     AfiliadoQuery innerJoinTipodoc($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipodoc relation
 *
 * @method     AfiliadoQuery leftJoinReparticion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Reparticion relation
 * @method     AfiliadoQuery rightJoinReparticion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Reparticion relation
 * @method     AfiliadoQuery innerJoinReparticion($relationAlias = null) Adds a INNER JOIN clause to the query using the Reparticion relation
 *
 * @method     AfiliadoQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     AfiliadoQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     AfiliadoQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     AfiliadoQuery leftJoinSexo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sexo relation
 * @method     AfiliadoQuery rightJoinSexo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sexo relation
 * @method     AfiliadoQuery innerJoinSexo($relationAlias = null) Adds a INNER JOIN clause to the query using the Sexo relation
 *
 * @method     AfiliadoQuery leftJoinEstadocivil($relationAlias = null) Adds a LEFT JOIN clause to the query using the Estadocivil relation
 * @method     AfiliadoQuery rightJoinEstadocivil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Estadocivil relation
 * @method     AfiliadoQuery innerJoinEstadocivil($relationAlias = null) Adds a INNER JOIN clause to the query using the Estadocivil relation
 *
 * @method     Afiliado findOne(PropelPDO $con = null) Return the first Afiliado matching the query
 * @method     Afiliado findOneOrCreate(PropelPDO $con = null) Return the first Afiliado matching the query, or a new Afiliado object populated from the query conditions when no match is found
 *
 * @method     Afiliado findOneById(int $id) Return the first Afiliado filtered by the id column
 * @method     Afiliado findOneByNroDoc(int $nro_doc) Return the first Afiliado filtered by the nro_doc column
 * @method     Afiliado findOneByApenombre(string $apenombre) Return the first Afiliado filtered by the apenombre column
 * @method     Afiliado findOneByFechanac(string $fechanac) Return the first Afiliado filtered by the fechanac column
 * @method     Afiliado findOneByCalle(string $calle) Return the first Afiliado filtered by the calle column
 * @method     Afiliado findOneByAltura(string $altura) Return the first Afiliado filtered by the altura column
 * @method     Afiliado findOneByPiso(string $piso) Return the first Afiliado filtered by the piso column
 * @method     Afiliado findOneByDepto(string $depto) Return the first Afiliado filtered by the depto column
 * @method     Afiliado findOneByPlanId(int $plan_id) Return the first Afiliado filtered by the plan_id column
 * @method     Afiliado findOneByTipodocId(int $tipodoc_id) Return the first Afiliado filtered by the tipodoc_id column
 * @method     Afiliado findOneByReparticionId(int $reparticion_id) Return the first Afiliado filtered by the reparticion_id column
 * @method     Afiliado findOneByLocalidadId(int $localidad_id) Return the first Afiliado filtered by the localidad_id column
 * @method     Afiliado findOneByFechaingreso(string $fechaingreso) Return the first Afiliado filtered by the fechaingreso column
 * @method     Afiliado findOneBySexoId(int $sexo_id) Return the first Afiliado filtered by the sexo_id column
 * @method     Afiliado findOneByEstadocivilId(int $estadocivil_id) Return the first Afiliado filtered by the estadocivil_id column
 *
 * @method     array findById(int $id) Return Afiliado objects filtered by the id column
 * @method     array findByNroDoc(int $nro_doc) Return Afiliado objects filtered by the nro_doc column
 * @method     array findByApenombre(string $apenombre) Return Afiliado objects filtered by the apenombre column
 * @method     array findByFechanac(string $fechanac) Return Afiliado objects filtered by the fechanac column
 * @method     array findByCalle(string $calle) Return Afiliado objects filtered by the calle column
 * @method     array findByAltura(string $altura) Return Afiliado objects filtered by the altura column
 * @method     array findByPiso(string $piso) Return Afiliado objects filtered by the piso column
 * @method     array findByDepto(string $depto) Return Afiliado objects filtered by the depto column
 * @method     array findByPlanId(int $plan_id) Return Afiliado objects filtered by the plan_id column
 * @method     array findByTipodocId(int $tipodoc_id) Return Afiliado objects filtered by the tipodoc_id column
 * @method     array findByReparticionId(int $reparticion_id) Return Afiliado objects filtered by the reparticion_id column
 * @method     array findByLocalidadId(int $localidad_id) Return Afiliado objects filtered by the localidad_id column
 * @method     array findByFechaingreso(string $fechaingreso) Return Afiliado objects filtered by the fechaingreso column
 * @method     array findBySexoId(int $sexo_id) Return Afiliado objects filtered by the sexo_id column
 * @method     array findByEstadocivilId(int $estadocivil_id) Return Afiliado objects filtered by the estadocivil_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAfiliadoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAfiliadoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Afiliado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AfiliadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AfiliadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AfiliadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AfiliadoQuery) {
            return $criteria;
        }
        $query = new AfiliadoQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Afiliado|Afiliado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AfiliadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AfiliadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Afiliado A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NRO_DOC`, `APENOMBRE`, `FECHANAC`, `CALLE`, `ALTURA`, `PISO`, `DEPTO`, `PLAN_ID`, `TIPODOC_ID`, `REPARTICION_ID`, `LOCALIDAD_ID`, `FECHAINGRESO`, `SEXO_ID`, `ESTADOCIVIL_ID` FROM `afiliado` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Afiliado();
            $obj->hydrate($row);
            AfiliadoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Afiliado|Afiliado[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Afiliado[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AfiliadoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AfiliadoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AfiliadoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nro_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByNroDoc(1234); // WHERE nro_doc = 1234
     * $query->filterByNroDoc(array(12, 34)); // WHERE nro_doc IN (12, 34)
     * $query->filterByNroDoc(array('min' => 12)); // WHERE nro_doc > 12
     * </code>
     *
     * @param     mixed $nroDoc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByNroDoc($nroDoc = null, $comparison = null)
    {
        if (is_array($nroDoc)) {
            $useMinMax = false;
            if (isset($nroDoc['min'])) {
                $this->addUsingAlias(AfiliadoPeer::NRO_DOC, $nroDoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nroDoc['max'])) {
                $this->addUsingAlias(AfiliadoPeer::NRO_DOC, $nroDoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::NRO_DOC, $nroDoc, $comparison);
    }

    /**
     * Filter the query on the apenombre column
     *
     * Example usage:
     * <code>
     * $query->filterByApenombre('fooValue');   // WHERE apenombre = 'fooValue'
     * $query->filterByApenombre('%fooValue%'); // WHERE apenombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apenombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByApenombre($apenombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apenombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apenombre)) {
                $apenombre = str_replace('*', '%', $apenombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::APENOMBRE, $apenombre, $comparison);
    }

    /**
     * Filter the query on the fechanac column
     *
     * Example usage:
     * <code>
     * $query->filterByFechanac('2011-03-14'); // WHERE fechanac = '2011-03-14'
     * $query->filterByFechanac('now'); // WHERE fechanac = '2011-03-14'
     * $query->filterByFechanac(array('max' => 'yesterday')); // WHERE fechanac > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechanac The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByFechanac($fechanac = null, $comparison = null)
    {
        if (is_array($fechanac)) {
            $useMinMax = false;
            if (isset($fechanac['min'])) {
                $this->addUsingAlias(AfiliadoPeer::FECHANAC, $fechanac['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechanac['max'])) {
                $this->addUsingAlias(AfiliadoPeer::FECHANAC, $fechanac['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::FECHANAC, $fechanac, $comparison);
    }

    /**
     * Filter the query on the calle column
     *
     * Example usage:
     * <code>
     * $query->filterByCalle('fooValue');   // WHERE calle = 'fooValue'
     * $query->filterByCalle('%fooValue%'); // WHERE calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByCalle($calle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calle)) {
                $calle = str_replace('*', '%', $calle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::CALLE, $calle, $comparison);
    }

    /**
     * Filter the query on the altura column
     *
     * Example usage:
     * <code>
     * $query->filterByAltura('fooValue');   // WHERE altura = 'fooValue'
     * $query->filterByAltura('%fooValue%'); // WHERE altura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $altura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByAltura($altura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($altura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $altura)) {
                $altura = str_replace('*', '%', $altura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::ALTURA, $altura, $comparison);
    }

    /**
     * Filter the query on the piso column
     *
     * Example usage:
     * <code>
     * $query->filterByPiso('fooValue');   // WHERE piso = 'fooValue'
     * $query->filterByPiso('%fooValue%'); // WHERE piso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByPiso($piso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piso)) {
                $piso = str_replace('*', '%', $piso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::PISO, $piso, $comparison);
    }

    /**
     * Filter the query on the depto column
     *
     * Example usage:
     * <code>
     * $query->filterByDepto('fooValue');   // WHERE depto = 'fooValue'
     * $query->filterByDepto('%fooValue%'); // WHERE depto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByDepto($depto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depto)) {
                $depto = str_replace('*', '%', $depto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::DEPTO, $depto, $comparison);
    }

    /**
     * Filter the query on the plan_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanId(1234); // WHERE plan_id = 1234
     * $query->filterByPlanId(array(12, 34)); // WHERE plan_id IN (12, 34)
     * $query->filterByPlanId(array('min' => 12)); // WHERE plan_id > 12
     * </code>
     *
     * @see       filterByPlan()
     *
     * @param     mixed $planId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByPlanId($planId = null, $comparison = null)
    {
        if (is_array($planId)) {
            $useMinMax = false;
            if (isset($planId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::PLAN_ID, $planId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::PLAN_ID, $planId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::PLAN_ID, $planId, $comparison);
    }

    /**
     * Filter the query on the tipodoc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipodocId(1234); // WHERE tipodoc_id = 1234
     * $query->filterByTipodocId(array(12, 34)); // WHERE tipodoc_id IN (12, 34)
     * $query->filterByTipodocId(array('min' => 12)); // WHERE tipodoc_id > 12
     * </code>
     *
     * @see       filterByTipodoc()
     *
     * @param     mixed $tipodocId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByTipodocId($tipodocId = null, $comparison = null)
    {
        if (is_array($tipodocId)) {
            $useMinMax = false;
            if (isset($tipodocId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::TIPODOC_ID, $tipodocId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipodocId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::TIPODOC_ID, $tipodocId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::TIPODOC_ID, $tipodocId, $comparison);
    }

    /**
     * Filter the query on the reparticion_id column
     *
     * Example usage:
     * <code>
     * $query->filterByReparticionId(1234); // WHERE reparticion_id = 1234
     * $query->filterByReparticionId(array(12, 34)); // WHERE reparticion_id IN (12, 34)
     * $query->filterByReparticionId(array('min' => 12)); // WHERE reparticion_id > 12
     * </code>
     *
     * @see       filterByReparticion()
     *
     * @param     mixed $reparticionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByReparticionId($reparticionId = null, $comparison = null)
    {
        if (is_array($reparticionId)) {
            $useMinMax = false;
            if (isset($reparticionId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::REPARTICION_ID, $reparticionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reparticionId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::REPARTICION_ID, $reparticionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::REPARTICION_ID, $reparticionId, $comparison);
    }

    /**
     * Filter the query on the localidad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidadId(1234); // WHERE localidad_id = 1234
     * $query->filterByLocalidadId(array(12, 34)); // WHERE localidad_id IN (12, 34)
     * $query->filterByLocalidadId(array('min' => 12)); // WHERE localidad_id > 12
     * </code>
     *
     * @see       filterByLocalidad()
     *
     * @param     mixed $localidadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByLocalidadId($localidadId = null, $comparison = null)
    {
        if (is_array($localidadId)) {
            $useMinMax = false;
            if (isset($localidadId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::LOCALIDAD_ID, $localidadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::LOCALIDAD_ID, $localidadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::LOCALIDAD_ID, $localidadId, $comparison);
    }

    /**
     * Filter the query on the fechaingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaingreso('2011-03-14'); // WHERE fechaingreso = '2011-03-14'
     * $query->filterByFechaingreso('now'); // WHERE fechaingreso = '2011-03-14'
     * $query->filterByFechaingreso(array('max' => 'yesterday')); // WHERE fechaingreso > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaingreso The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByFechaingreso($fechaingreso = null, $comparison = null)
    {
        if (is_array($fechaingreso)) {
            $useMinMax = false;
            if (isset($fechaingreso['min'])) {
                $this->addUsingAlias(AfiliadoPeer::FECHAINGRESO, $fechaingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaingreso['max'])) {
                $this->addUsingAlias(AfiliadoPeer::FECHAINGRESO, $fechaingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::FECHAINGRESO, $fechaingreso, $comparison);
    }

    /**
     * Filter the query on the sexo_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySexoId(1234); // WHERE sexo_id = 1234
     * $query->filterBySexoId(array(12, 34)); // WHERE sexo_id IN (12, 34)
     * $query->filterBySexoId(array('min' => 12)); // WHERE sexo_id > 12
     * </code>
     *
     * @see       filterBySexo()
     *
     * @param     mixed $sexoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterBySexoId($sexoId = null, $comparison = null)
    {
        if (is_array($sexoId)) {
            $useMinMax = false;
            if (isset($sexoId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::SEXO_ID, $sexoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sexoId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::SEXO_ID, $sexoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::SEXO_ID, $sexoId, $comparison);
    }

    /**
     * Filter the query on the estadocivil_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadocivilId(1234); // WHERE estadocivil_id = 1234
     * $query->filterByEstadocivilId(array(12, 34)); // WHERE estadocivil_id IN (12, 34)
     * $query->filterByEstadocivilId(array('min' => 12)); // WHERE estadocivil_id > 12
     * </code>
     *
     * @see       filterByEstadocivil()
     *
     * @param     mixed $estadocivilId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function filterByEstadocivilId($estadocivilId = null, $comparison = null)
    {
        if (is_array($estadocivilId)) {
            $useMinMax = false;
            if (isset($estadocivilId['min'])) {
                $this->addUsingAlias(AfiliadoPeer::ESTADOCIVIL_ID, $estadocivilId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estadocivilId['max'])) {
                $this->addUsingAlias(AfiliadoPeer::ESTADOCIVIL_ID, $estadocivilId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AfiliadoPeer::ESTADOCIVIL_ID, $estadocivilId, $comparison);
    }

    /**
     * Filter the query by a related Plan object
     *
     * @param   Plan|PropelObjectCollection $plan The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPlan($plan, $comparison = null)
    {
        if ($plan instanceof Plan) {
            return $this
                ->addUsingAlias(AfiliadoPeer::PLAN_ID, $plan->getId(), $comparison);
        } elseif ($plan instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::PLAN_ID, $plan->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPlan() only accepts arguments of type Plan or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Plan relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinPlan($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Plan');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Plan');
        }

        return $this;
    }

    /**
     * Use the Plan relation Plan object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanQuery A secondary query class using the current class as primary query
     */
    public function usePlanQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlan($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Plan', 'PlanQuery');
    }

    /**
     * Filter the query by a related Tipodoc object
     *
     * @param   Tipodoc|PropelObjectCollection $tipodoc The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipodoc($tipodoc, $comparison = null)
    {
        if ($tipodoc instanceof Tipodoc) {
            return $this
                ->addUsingAlias(AfiliadoPeer::TIPODOC_ID, $tipodoc->getId(), $comparison);
        } elseif ($tipodoc instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::TIPODOC_ID, $tipodoc->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipodoc() only accepts arguments of type Tipodoc or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tipodoc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinTipodoc($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tipodoc');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Tipodoc');
        }

        return $this;
    }

    /**
     * Use the Tipodoc relation Tipodoc object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipodocQuery A secondary query class using the current class as primary query
     */
    public function useTipodocQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipodoc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tipodoc', 'TipodocQuery');
    }

    /**
     * Filter the query by a related Reparticion object
     *
     * @param   Reparticion|PropelObjectCollection $reparticion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByReparticion($reparticion, $comparison = null)
    {
        if ($reparticion instanceof Reparticion) {
            return $this
                ->addUsingAlias(AfiliadoPeer::REPARTICION_ID, $reparticion->getId(), $comparison);
        } elseif ($reparticion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::REPARTICION_ID, $reparticion->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByReparticion() only accepts arguments of type Reparticion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Reparticion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinReparticion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Reparticion');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Reparticion');
        }

        return $this;
    }

    /**
     * Use the Reparticion relation Reparticion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ReparticionQuery A secondary query class using the current class as primary query
     */
    public function useReparticionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinReparticion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Reparticion', 'ReparticionQuery');
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(AfiliadoPeer::LOCALIDAD_ID, $localidad->getId(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::LOCALIDAD_ID, $localidad->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByLocalidad() only accepts arguments of type Localidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Localidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinLocalidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Localidad');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Localidad');
        }

        return $this;
    }

    /**
     * Use the Localidad relation Localidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocalidadQuery A secondary query class using the current class as primary query
     */
    public function useLocalidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocalidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Localidad', 'LocalidadQuery');
    }

    /**
     * Filter the query by a related Sexo object
     *
     * @param   Sexo|PropelObjectCollection $sexo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySexo($sexo, $comparison = null)
    {
        if ($sexo instanceof Sexo) {
            return $this
                ->addUsingAlias(AfiliadoPeer::SEXO_ID, $sexo->getId(), $comparison);
        } elseif ($sexo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::SEXO_ID, $sexo->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBySexo() only accepts arguments of type Sexo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sexo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinSexo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sexo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Sexo');
        }

        return $this;
    }

    /**
     * Use the Sexo relation Sexo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SexoQuery A secondary query class using the current class as primary query
     */
    public function useSexoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSexo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sexo', 'SexoQuery');
    }

    /**
     * Filter the query by a related Estadocivil object
     *
     * @param   Estadocivil|PropelObjectCollection $estadocivil The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AfiliadoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEstadocivil($estadocivil, $comparison = null)
    {
        if ($estadocivil instanceof Estadocivil) {
            return $this
                ->addUsingAlias(AfiliadoPeer::ESTADOCIVIL_ID, $estadocivil->getId(), $comparison);
        } elseif ($estadocivil instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AfiliadoPeer::ESTADOCIVIL_ID, $estadocivil->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByEstadocivil() only accepts arguments of type Estadocivil or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Estadocivil relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function joinEstadocivil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Estadocivil');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Estadocivil');
        }

        return $this;
    }

    /**
     * Use the Estadocivil relation Estadocivil object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EstadocivilQuery A secondary query class using the current class as primary query
     */
    public function useEstadocivilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEstadocivil($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Estadocivil', 'EstadocivilQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Afiliado $afiliado Object to remove from the list of results
     *
     * @return AfiliadoQuery The current query, for fluid interface
     */
    public function prune($afiliado = null)
    {
        if ($afiliado) {
            $this->addUsingAlias(AfiliadoPeer::ID, $afiliado->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAfiliadoQuery