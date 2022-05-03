package com.BackEndProJect.BackEndProJect.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.BackEndProJect.BackEndProJect.model.EventModel;

@Repository
public interface EventRepository extends JpaRepository<EventModel, Integer> {

}
