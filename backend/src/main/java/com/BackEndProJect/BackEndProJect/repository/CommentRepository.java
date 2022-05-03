package com.BackEndProJect.BackEndProJect.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.BackEndProJect.BackEndProJect.model.CommentModel;

public interface CommentRepository extends JpaRepository<CommentModel, Integer> {

}
