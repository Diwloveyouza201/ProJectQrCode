package com.BackEndProJect.BackEndProJect.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.BackEndProJect.BackEndProJect.model.PEventModel;

@Repository
public interface PEventRepository extends JpaRepository<PEventModel, Integer> {

	
}
