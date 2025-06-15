import { Entity, PrimaryGeneratedColumn, Column, CreateDateColumn, UpdateDateColumn, Index } from 'typeorm';

@Entity('barangays')
export class Barangay {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 100 })
    name: string;

    @Column({ type: 'varchar', length: 100, unique: true })
    @Index()
    slug: string;

    @Column({ type: 'int' })
    population: number;

    @Column({ type: 'decimal', precision: 5, scale: 2 })
    population_percentage: number;

    @Column({ type: 'text', nullable: true })
    description: string;

    @Column({ type: 'decimal', precision: 10, scale: 8, nullable: true })
    latitude: number;

    @Column({ type: 'decimal', precision: 11, scale: 8, nullable: true })
    longitude: number;

    @Column({ type: 'varchar', length: 100, nullable: true })
    contact_person: string;

    @Column({ type: 'varchar', length: 20, nullable: true })
    contact_number: string;

    @Column({ type: 'varchar', length: 100, nullable: true })
    email: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    website: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
} 