<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_evaluation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of metrics calculated by comparing Model's predictions on all of
 * the test data against annotations from the test data.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelEvaluation</code>
 */
class ModelEvaluation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the ModelEvaluation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Points to a YAML file stored on Google Cloud Storage describing the
     * [metrics][google.cloud.aiplatform.v1.ModelEvaluation.metrics] of this ModelEvaluation. The schema is
     * defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string metrics_schema_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metrics_schema_uri = '';
    /**
     * Output only. Evaluation metrics of the Model. The schema of the metrics is stored in
     * [metrics_schema_uri][google.cloud.aiplatform.v1.ModelEvaluation.metrics_schema_uri]
     *
     * Generated from protobuf field <code>.google.protobuf.Value metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metrics = null;
    /**
     * Output only. Timestamp when this ModelEvaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. All possible [dimensions][ModelEvaluationSlice.slice.dimension] of
     * ModelEvaluationSlices. The dimensions can be used as the filter of the
     * [ModelService.ListModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.ListModelEvaluationSlices] request, in the form of
     * `slice.dimension = <dimension>`.
     *
     * Generated from protobuf field <code>repeated string slice_dimensions = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $slice_dimensions;
    /**
     * Output only. Aggregated explanation metrics for the Model's prediction output over the
     * data this ModelEvaluation uses. This field is populated only if the Model
     * is evaluated with explanations, and only for AutoML tabular Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelExplanation model_explanation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $model_explanation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the ModelEvaluation.
     *     @type string $metrics_schema_uri
     *           Output only. Points to a YAML file stored on Google Cloud Storage describing the
     *           [metrics][google.cloud.aiplatform.v1.ModelEvaluation.metrics] of this ModelEvaluation. The schema is
     *           defined as an OpenAPI 3.0.2 [Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *     @type \Google\Protobuf\Value $metrics
     *           Output only. Evaluation metrics of the Model. The schema of the metrics is stored in
     *           [metrics_schema_uri][google.cloud.aiplatform.v1.ModelEvaluation.metrics_schema_uri]
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this ModelEvaluation was created.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $slice_dimensions
     *           Output only. All possible [dimensions][ModelEvaluationSlice.slice.dimension] of
     *           ModelEvaluationSlices. The dimensions can be used as the filter of the
     *           [ModelService.ListModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.ListModelEvaluationSlices] request, in the form of
     *           `slice.dimension = <dimension>`.
     *     @type \Google\Cloud\AIPlatform\V1\ModelExplanation $model_explanation
     *           Output only. Aggregated explanation metrics for the Model's prediction output over the
     *           data this ModelEvaluation uses. This field is populated only if the Model
     *           is evaluated with explanations, and only for AutoML tabular Models.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelEvaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the ModelEvaluation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the ModelEvaluation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Points to a YAML file stored on Google Cloud Storage describing the
     * [metrics][google.cloud.aiplatform.v1.ModelEvaluation.metrics] of this ModelEvaluation. The schema is
     * defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string metrics_schema_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMetricsSchemaUri()
    {
        return $this->metrics_schema_uri;
    }

    /**
     * Output only. Points to a YAML file stored on Google Cloud Storage describing the
     * [metrics][google.cloud.aiplatform.v1.ModelEvaluation.metrics] of this ModelEvaluation. The schema is
     * defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *
     * Generated from protobuf field <code>string metrics_schema_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMetricsSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->metrics_schema_uri = $var;

        return $this;
    }

    /**
     * Output only. Evaluation metrics of the Model. The schema of the metrics is stored in
     * [metrics_schema_uri][google.cloud.aiplatform.v1.ModelEvaluation.metrics_schema_uri]
     *
     * Generated from protobuf field <code>.google.protobuf.Value metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    public function hasMetrics()
    {
        return isset($this->metrics);
    }

    public function clearMetrics()
    {
        unset($this->metrics);
    }

    /**
     * Output only. Evaluation metrics of the Model. The schema of the metrics is stored in
     * [metrics_schema_uri][google.cloud.aiplatform.v1.ModelEvaluation.metrics_schema_uri]
     *
     * Generated from protobuf field <code>.google.protobuf.Value metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->metrics = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this ModelEvaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this ModelEvaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. All possible [dimensions][ModelEvaluationSlice.slice.dimension] of
     * ModelEvaluationSlices. The dimensions can be used as the filter of the
     * [ModelService.ListModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.ListModelEvaluationSlices] request, in the form of
     * `slice.dimension = <dimension>`.
     *
     * Generated from protobuf field <code>repeated string slice_dimensions = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSliceDimensions()
    {
        return $this->slice_dimensions;
    }

    /**
     * Output only. All possible [dimensions][ModelEvaluationSlice.slice.dimension] of
     * ModelEvaluationSlices. The dimensions can be used as the filter of the
     * [ModelService.ListModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.ListModelEvaluationSlices] request, in the form of
     * `slice.dimension = <dimension>`.
     *
     * Generated from protobuf field <code>repeated string slice_dimensions = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSliceDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->slice_dimensions = $arr;

        return $this;
    }

    /**
     * Output only. Aggregated explanation metrics for the Model's prediction output over the
     * data this ModelEvaluation uses. This field is populated only if the Model
     * is evaluated with explanations, and only for AutoML tabular Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelExplanation model_explanation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelExplanation|null
     */
    public function getModelExplanation()
    {
        return $this->model_explanation;
    }

    public function hasModelExplanation()
    {
        return isset($this->model_explanation);
    }

    public function clearModelExplanation()
    {
        unset($this->model_explanation);
    }

    /**
     * Output only. Aggregated explanation metrics for the Model's prediction output over the
     * data this ModelEvaluation uses. This field is populated only if the Model
     * is evaluated with explanations, and only for AutoML tabular Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelExplanation model_explanation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelExplanation $var
     * @return $this
     */
    public function setModelExplanation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelExplanation::class);
        $this->model_explanation = $var;

        return $this;
    }

}

