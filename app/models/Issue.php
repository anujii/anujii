<?php

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $subject
 * @property mixed $project
 * @property mixed $author
 * @property mixed $assigned_to
 * @property mixed $started_at
 * @property mixed $ended_at
 * @property string $description
 */
class Issue extends Eloquent {

	protected $table = 'issues';

	protected $fillable = array('subject', 'description');//for now
}