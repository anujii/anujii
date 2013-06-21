<?php

/**
 * @property integer $id
 * @property string $subject
 * @property string $description
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $project
 * @property mixed $author
 * @property mixed $assigned_to
 * @property mixed $started_at
 * @property mixed $ended_at
 */
class Issue extends Eloquent {

	protected $table = 'issues';

	protected $fillable = array('subject', 'description');//for now

	protected $hidden = array('created_at', 'updated_at');
}