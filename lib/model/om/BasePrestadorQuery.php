<?php


/**
 * Base class that represents a query for the 'prestador' table.
 *
 * 
 *
 * @method     PrestadorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PrestadorQuery orderByApenom($order = Criteria::ASC) Order by the apenom column
 * @method     PrestadorQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     PrestadorQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method     PrestadorQuery orderByPiso($order = Criteria::ASC) Order by the piso column
 * @method     PrestadorQuery orderByDepto($order = Criteria::ASC) Order by the depto column
 * @method     PrestadorQuery orderByLocalidadId($order = Criteria::ASC) Order by the localidad_id column
 * @method     PrestadorQuery orderByEspecialidadId($order = Criteria::ASC) Order by the especialidad_id column
 *
 * @method     PrestadorQuery groupById() Group by the id column
 * @method     PrestadorQuery groupByApenom() Group by the apenom column
 * @method     PrestadorQuery groupByCalle() Group by the calle column
 * @method     PrestadorQuery groupByNumero() Group by the numero column
 * @method     PrestadorQuery groupByPiso() Group by the piso column
 * @method     PrestadorQuery groupByDepto() Group by the depto column
 * @method     PrestadorQuery groupByLocalidadId() Group by the localidad_id column
 * @method     PrestadorQuery groupByEspecialidadId() Group by the especialidad_id column
 *
 * @method     PrestadorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PrestadorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PrestadorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PrestadorQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     PrestadorQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     PrestadorQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     PrestadorQuery leftJoinEspecialidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Especialidad relation
 * @method     PrestadorQuery rightJoinEspecialidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Especialidad relation
 * @method     PrestadorQuery innerJoinEspecialidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Especialidad relation
 *
 * @method     PrestadorQuery leftJoinCentroatencionHasPrestador($relationAlias = null) Adds a LEFT JOIN clause to the query using the CentroatencionHasPrestador relation
 * @method     PrestadorQuery rightJoinCentroatencionHasPrestador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CentroatencionHasPrestador relation
 * @method     PrestadorQuery innerJoinCentroatencionHasPrestador($relationAlias = null) Adds a INNER JOIN clause to the query using the CentroatencionHasPrestador relation
 *
 * @method     Prestador findOne(PropelPDO $con = null) Return the first Prestador matching the query
 * @method     Prestador findOneOrCreate(PropelPDO $con = null) Return the first Prestador matching the query, or a new Prestador object populated from the query conditions when no match is found
 *
 * @method     Prestador findOneById(int $id) Return the first Prestador filtered by the id column
 * @method     Prestador findOneByApenom(string $apenom) Return the first Prestador filtered by the apenom column
 * @method     Prestador findOneByCalle(string $calle) Return the first Prestador filtered by the calle column
 * @method     Prestador findOneByNumero(int $numero) Return the first Prestador filtered by the numero column
 * @method     Prestador findOneByPiso(int $piso) Return the first Prestador filtered by the piso column
 * @method     Prestador findOneByDepto(string $depto) Return the first Prestador filtered by the depto column
 * @method     Prestador findOneByLocalidadId(int $localidad_id) Return the first Prestador filtered by the localidad_id column
 * @method     Prestador findOneByEspecialidadId(int $especialidad_id) Return the first Prestador filtered by the especialidad_id column
 *
 * @method     array findById(int $id) Return Prestador objects filtered by the id column
 * @method     array findByApenom(string $apenom) Return Prestador objects filtered by the apenom column
 * @method     array findByCalle(string $calle) Return Prestador objects filtered by the calle column
 * @method     array findByNumero(int $numero) Return Prestador objects filtered by the numero column
 * @method     array findByPiso(int $piso) Return Prestador objects filtered by the piso column
 * @method     array findByDepto(string $depto) Return Prestador objects filtered by the depto column
 * @method     array findByLocalidadId(int $localidad_id) Return Prestador objects filtered by the localidad_id column
 * @method     array findByEspecialidadId(int $especialidad_id) Return Prestador objects filtered by the especialidad_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePrestadorQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePrestadorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Prestador', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PrestadorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PrestadorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PrestadorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PrestadorQuery) {
            return $criteria;
        }
        $query = new PrestadorQuery();
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
     * @return   Prestador|Prestador[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PrestadorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PrestadorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Prestador A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `APENOM`, `CALLE`, `NUMERO`, `PISO`, `DEPTO`, `LOCALIDAD_ID`, `ESPECIALIDAD_ID` FROM `prestador` WHERE `ID` = :p0';
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
            $obj = new Prestador();
            $obj->hydrate($row);
            PrestadorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Prestador|Prestador[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Prestador[]|mixed the list of results, formatted by the current formatter
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
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PrestadorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PrestadorPeer::ID, $keys, Criteria::IN);
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
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PrestadorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the apenom column
     *
     * Example usage:
     * <code>
     * $query->filterByApenom('fooValue');   // WHERE apenom = 'fooValue'
     * $query->filterByApenom('%fooValue%'); // WHERE apenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByApenom($apenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apenom)) {
                $apenom = str_replace('*', '%', $apenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PrestadorPeer::APENOM, $apenom, $comparison);
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
     * @return PrestadorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PrestadorPeer::CALLE, $calle, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero(1234); // WHERE numero = 1234
     * $query->filterByNumero(array(12, 34)); // WHERE numero IN (12, 34)
     * $query->filterByNumero(array('min' => 12)); // WHERE numero > 12
     * </code>
     *
     * @param     mixed $numero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (is_array($numero)) {
            $useMinMax = false;
            if (isset($numero['min'])) {
                $this->addUsingAlias(PrestadorPeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numero['max'])) {
                $this->addUsingAlias(PrestadorPeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrestadorPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the piso column
     *
     * Example usage:
     * <code>
     * $query->filterByPiso(1234); // WHERE piso = 1234
     * $query->filterByPiso(array(12, 34)); // WHERE piso IN (12, 34)
     * $query->filterByPiso(array('min' => 12)); // WHERE piso > 12
     * </code>
     *
     * @param     mixed $piso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByPiso($piso = null, $comparison = null)
    {
        if (is_array($piso)) {
            $useMinMax = false;
            if (isset($piso['min'])) {
                $this->addUsingAlias(PrestadorPeer::PISO, $piso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piso['max'])) {
                $this->addUsingAlias(PrestadorPeer::PISO, $piso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrestadorPeer::PISO, $piso, $comparison);
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
     * @return PrestadorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PrestadorPeer::DEPTO, $depto, $comparison);
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
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByLocalidadId($localidadId = null, $comparison = null)
    {
        if (is_array($localidadId)) {
            $useMinMax = false;
            if (isset($localidadId['min'])) {
                $this->addUsingAlias(PrestadorPeer::LOCALIDAD_ID, $localidadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadId['max'])) {
                $this->addUsingAlias(PrestadorPeer::LOCALIDAD_ID, $localidadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrestadorPeer::LOCALIDAD_ID, $localidadId, $comparison);
    }

    /**
     * Filter the query on the especialidad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialidadId(1234); // WHERE especialidad_id = 1234
     * $query->filterByEspecialidadId(array(12, 34)); // WHERE especialidad_id IN (12, 34)
     * $query->filterByEspecialidadId(array('min' => 12)); // WHERE especialidad_id > 12
     * </code>
     *
     * @see       filterByEspecialidad()
     *
     * @param     mixed $especialidadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function filterByEspecialidadId($especialidadId = null, $comparison = null)
    {
        if (is_array($especialidadId)) {
            $useMinMax = false;
            if (isset($especialidadId['min'])) {
                $this->addUsingAlias(PrestadorPeer::ESPECIALIDAD_ID, $especialidadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($especialidadId['max'])) {
                $this->addUsingAlias(PrestadorPeer::ESPECIALIDAD_ID, $especialidadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrestadorPeer::ESPECIALIDAD_ID, $especialidadId, $comparison);
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PrestadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(PrestadorPeer::LOCALIDAD_ID, $localidad->getId(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PrestadorPeer::LOCALIDAD_ID, $localidad->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return PrestadorQuery The current query, for fluid interface
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
     * Filter the query by a related Especialidad object
     *
     * @param   Especialidad|PropelObjectCollection $especialidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PrestadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEspecialidad($especialidad, $comparison = null)
    {
        if ($especialidad instanceof Especialidad) {
            return $this
                ->addUsingAlias(PrestadorPeer::ESPECIALIDAD_ID, $especialidad->getId(), $comparison);
        } elseif ($especialidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PrestadorPeer::ESPECIALIDAD_ID, $especialidad->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByEspecialidad() only accepts arguments of type Especialidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Especialidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function joinEspecialidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Especialidad');

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
            $this->addJoinObject($join, 'Especialidad');
        }

        return $this;
    }

    /**
     * Use the Especialidad relation Especialidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EspecialidadQuery A secondary query class using the current class as primary query
     */
    public function useEspecialidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEspecialidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Especialidad', 'EspecialidadQuery');
    }

    /**
     * Filter the query by a related CentroatencionHasPrestador object
     *
     * @param   CentroatencionHasPrestador|PropelObjectCollection $centroatencionHasPrestador  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PrestadorQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCentroatencionHasPrestador($centroatencionHasPrestador, $comparison = null)
    {
        if ($centroatencionHasPrestador instanceof CentroatencionHasPrestador) {
            return $this
                ->addUsingAlias(PrestadorPeer::ID, $centroatencionHasPrestador->getPrestadorId(), $comparison);
        } elseif ($centroatencionHasPrestador instanceof PropelObjectCollection) {
            return $this
                ->useCentroatencionHasPrestadorQuery()
                ->filterByPrimaryKeys($centroatencionHasPrestador->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCentroatencionHasPrestador() only accepts arguments of type CentroatencionHasPrestador or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CentroatencionHasPrestador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function joinCentroatencionHasPrestador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CentroatencionHasPrestador');

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
            $this->addJoinObject($join, 'CentroatencionHasPrestador');
        }

        return $this;
    }

    /**
     * Use the CentroatencionHasPrestador relation CentroatencionHasPrestador object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CentroatencionHasPrestadorQuery A secondary query class using the current class as primary query
     */
    public function useCentroatencionHasPrestadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCentroatencionHasPrestador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CentroatencionHasPrestador', 'CentroatencionHasPrestadorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Prestador $prestador Object to remove from the list of results
     *
     * @return PrestadorQuery The current query, for fluid interface
     */
    public function prune($prestador = null)
    {
        if ($prestador) {
            $this->addUsingAlias(PrestadorPeer::ID, $prestador->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePrestadorQuery